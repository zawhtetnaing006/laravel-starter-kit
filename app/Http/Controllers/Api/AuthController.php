<?php
namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Repositories\UserRepo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\User\RegisterRequest;
use App\Http\Requests\User\LoginRequest;
use App\Http\Controllers\Media\ImageController;

/**
 * @group Auth
 * 
*/
class AuthController {
	private $userRepo;

	public function __construct(UserRepo $userRepo) {
		$this->userRepo = $userRepo;
	}


	/**
	 * User LogIn
	 * 
	 * @bodyParam email string required
	 * @bodyParam password string required
	 * @bodyParam device_name string To identified user login devices. Won't be needed for web.
	 * 
	 * @response {
	 * 	"token": "generate token"
	 * }
	 */
	public function login(LoginRequest $request){

		$validated = $request->validated();
		\Log::info($validated);
		$user = $this->userRepo->whereFirst('email',$validated['email']);

		//check credentials
    	if (! $user || ! Hash::check($validated['password'], $user->password)) {
        	throw ValidationException::withMessages([
            	'email' => ['The provided credentials are incorrect.'],
        	]);
    	}

    	//update login device
    	if(array_key_exists('device_name', $validated) && $validated['device_name']){
    		$this->userRepo->update($user->id, ['device_name'=>$validated['device_name']]);
    		\Log::info('update');

    	}

    	return response()->json(
    		['token' => $this->userRepo->generateToken($user)] 
    	);	
	}


	/**
	 * User Register
	 * @header Content-Type multipart/form-data
	 * 
	 * @bodyParam name string required
	 * @bodyParam profile_photo max:2048kb
	 * @bodyParam email string required Must Be Unique
	 * @bodyParam phone string required
	 * @bodyParam age integer min:16
	 * @bodyParam degree string
	 * @bodyParam job_title string
	 * @bodyParam password string required min:8|confirmed
	 * @bodyParam password_confirmation required min8
	 * @bodyParam bio string
	 * 
	 * @response {
	 *  
	 * "id": 1,	
     * "name": "ab",
     * "email": "admin@gmail.com",
     * "phone": "temporibus",
     * "age": 18,
     * "device_name": "Iphone",
     * "degree": "commodi",
     * "job_title": "Team Lead at google",
     * "bio": "Awesome developer",
     * "updated_at": "2023-05-29:16:06:33",
     * "created_at": "2023-05-29:16:06:33",
     * "token": "1|qo6eJceg77saTfqEl6bJ5SJ8J38uUEgIwgxHYX7m",
     * "profile_photo_path": "path/to/profile_image"
	 * }
	 * 
	 * will always retrun response in this format. If there's no value, there'll be null
	 */
	public function register(RegisterRequest $request){
		$validated = $request->validated();
		$result = $this->userRepo->create($validated);
		
		$password = Hash::make($validated['password']);
		$password_created = $this->userRepo->fill($result->id,[
			'password' => $password
		]);

		if($result && $password_created){

			$result['token'] = $this->userRepo->generateToken($result);
			$result['profile_photo_path'] = null;

			//upload profile photo if exists
			if(array_key_exists('profile_photo',$validated) && $validated['profile_photo']){

				$profile_pic = $validated['profile_photo'];
				$path = config('app.profile_photo_folder');

				$imageController = new ImageController();
				$uploaded_path = $imageController->uploadImage($profile_pic,$path);

				if($uploaded_path){
					$this->userRepo->update($result->id,[
						'profile_photo_path' => $uploaded_path
					]);
					$result['profile_photo_path'] = $uploaded_path;
				}
			}

		} else {
			$result = null;
		}
		return response()->json($result);
	}
}
