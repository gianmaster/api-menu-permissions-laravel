<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function getUserAll(){
        $users = User::all();
        return response(['data' => $users], 200);
    }
}
