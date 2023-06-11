<?php

namespace App\Http\Repositories;

use App\Models\User;

class UserRepo extends BaseRepo
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }

    public function generateToken(User $user){
        return $user->createToken('user-token')->plainTextToken;
    }
}

