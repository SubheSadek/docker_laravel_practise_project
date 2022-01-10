<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createUser(Request $request){
        $data = $request->all();
        return User::create($data);
    }

    public function getUser(){
        return "from docker project";
    }
}
