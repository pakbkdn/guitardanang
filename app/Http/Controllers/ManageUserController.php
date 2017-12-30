<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ManageUserController extends Controller
{
    public function listUser(){
        $users = User::All();
        return view('admin.user.list_user', compact('users'));
    }
    public function changeRoles($id){
        $user = User::find($id);
        return view('admin.user.edit_user', compact('user'));
    }
    public function saveRoles($id, Request $rq){
        // $user = User::find($id);
        // return view('admin.user.edit_user', compact('user'));
        $data = User::find($id);
        $data->roles = $rq->input('roles');
        $data->save();
        return redirect()->route('manageUser');
    }


}
