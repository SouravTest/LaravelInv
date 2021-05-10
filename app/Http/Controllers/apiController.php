<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class apiController extends Controller
{
    public function register(Request $req)
    {
        $user = new Member;
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->password = Hash::make($req->input('password'));
        $user->save();
        return $user;
    }
    public function login(Request $req)
    {
        $user = Member::where('email', $req->email)->first();
        if (!$user || !Hash::check($req->password, $user->password)) {
            return response([
                'error' => ["Email or Password Not Matched"],
            ]);
        }
        return $user;
    }
}