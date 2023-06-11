<?php

namespace App\Http\Controllers\Topics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @group Topics
 * 
 */
class ListingController extends Controller
{
    /**
     * Topic listing
     * 
     */
    public function index(){
        return 'success';
    }
}
