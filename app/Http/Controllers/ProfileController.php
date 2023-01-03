<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    
    public function updateUserProfile(Request $request, $userId){
        // UPDATE USERs TO DB
        DB::table('users')
        ->where('id', '=', $userId)
        ->update([
            'username' => $request->inputName, //didapatkan dari input fromInsertUpdate.
            'email' => $request->inputEmail,
            'phonenumber' => $request->inputPhoneNum,
            'address' => $request->inputAddress
        ]);
        return redirect('/');
    }


    public function updateUserPassword(Request $request, $userId){
        // UPDATE USERS TO DB
        DB::table('users')
        ->where('id', '=', $userId)
        ->update([
            'password' => $request->inputNewPassword, //didapatkan dari input fromInsertUpdate.
        ]);
        return redirect('/');
    }
    

}
