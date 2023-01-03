<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function SignUp(Request $request){

        $validateData = $request->validate([
            'username' => 'required|min:5|max:50|unique:posts',
            'email' => 'required|unique:posts',
            'password' => 'required|min:5|max:50|',
            'phone_number' => 'required|min:10|max:13|',
            'address' => 'required|min:5',



        ])

    }
}
