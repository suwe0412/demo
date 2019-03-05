<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;

class HomeController extends Controller
{
    

    public function index()
    {
        $role = Role::find(1);
        dd($role->users);

        $user = User::find(1);
        $user->roles()->attach(2);
        dd($user->roles); 
    }
}
