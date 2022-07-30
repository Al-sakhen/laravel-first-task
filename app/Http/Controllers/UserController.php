<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            'ahmad',
            'ali',
            'mohammad',
        ];
        return view('users.index', compact('users'));
    }
}
