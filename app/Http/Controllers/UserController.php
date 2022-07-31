<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $users = [
            'ahmad',
            'mohammad',
            'ameen'
        ];
        return view('user.index' , compact('users'));
    }

    public function create(){
        return view('user.create');
    }

    public function update(){
        return view('user.update');
    }
}
