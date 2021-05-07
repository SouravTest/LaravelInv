<?php

namespace App\Http\Controllers;

use App\Models\User;

class userController extends Controller
{
    public function getdata()
    {
        return User::all();
    }
}