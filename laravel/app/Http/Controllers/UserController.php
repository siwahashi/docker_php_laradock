<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        /* var_dump('UserController::__construct'); */
    }

    public function index()
    {
        /* var_dump('UserController::index'); */

        $users = User::first();
        /* var_dump($users); */

        return view('user', [
            'users' => $users,
        ]);
    }
}