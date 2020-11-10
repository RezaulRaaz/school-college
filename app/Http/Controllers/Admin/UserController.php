<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('Admin.Users.index',compact('users'));
    }
    public function edit($id){
        return 'This is edit';
    }

    public function delete($id){
        return 'This is delete';
    }
}
