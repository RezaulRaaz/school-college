<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Carbon\Carbon;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $roles = Role::all();
        return view('Admin.Users.index',compact('roles'));
    }
    public function show(){
        $users = User::all();
        return view('Admin.Users.userList',compact('users'));
    }

    public function store(Request $request){
        $request->validate([
            'user_name'=>'required',
            'avatar'=>'image|mimes:jpeg,png,jpg',
            'email'=>'required|email',
            'role'=>'required',
            'password'=>'required|min:8',
        ]);


            if(!empty($request->varified)){
                $email_verified_at=Carbon::Now();
            }else{
                $email_verified_at=Null;
            }

        $date = date("i-h-s-Y");
        $file=$request->file('avatar');
        $fileSizeBytes = filesize($file);
        $sizeInKB = floor(($fileSizeBytes/1024));
        if( 500 >=  $sizeInKB){
            if(isset($file)){
                $imageName = $request->user_name.'-'.$date.'.'.$file->getClientOriginalExtension();
                if (!File::exists("/images/users")) {
                    File::makeDirectory("/images/users",0777,true);
                }
                $destinationPath = 'images/users/';
                $file->move($destinationPath, $imageName);
            }
            $user = new User();
            $user->name = $request->user_name;
            $user->avatar = $imageName;
            $user->phone = $request->user_name;
            $user->address = $request->address;
            $user->designation = $request->designation;
            $user->about = $request->about;
            $user->user_status = 1;
            $user->email = $request->email;
            $user->email_verified_at = $email_verified_at;
            $user->password = Hash::make($request->password);
            $user->role_id = $request->role;
            $user->save();
            toastr()->success('Successfully user add', 'Success', ['timeOut' => 5000]);
            return redirect()->route('admin.user.list');
        }else{
            toastr()->warning('Your Image is More than 500KB', 'Warning', ['timeOut' => 5000]);
            return redirect()->back();
        }
    }


    public function edit($id){
        return 'This is edit';
    }


    public function delete($id){
        return 'This is delete';
    }
}
