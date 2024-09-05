<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function register(request $request){
        $incomingFields = $request->validate([
            'name'=> ['required',],
            'email'=> ['required',],
            'password'=> ['required',]


        ]);
         $incomingFileds['password']= bcrypt($incomingFields['password']);
       User::create($incomingFields);
   
        return 'selam from controller';
     }
}
