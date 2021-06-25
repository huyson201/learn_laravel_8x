<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\MyUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = MyUser::getAll();
        return view('users', ['users' => $users]);
    }
}
