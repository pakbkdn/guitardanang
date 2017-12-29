<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use Toastr;
use App\User;
use Illuminate\Support\MessageBag;

class UserController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function updateProfile(){
        $user = Auth::user();
        return view('admin.user.profile', compact('user'));
    }

    public function save($id ,Request $rq){
        $data = User::find($id);
        $name = $rq->input('username');
            if ($name != null) $data ->username=$name;
        $data->save();
        Toastr::success('Cập nhật thông tin thành công', $title = null, $options = []);
        return redirect('ad-guitardn');
    }

    public function chagepass(){
        return view('admin.user.changepassword');
    }
    public function savepass(request $rq)
        {
            $this->validate($rq,
                [
                    'oldpassword' => 'required',
                    'repassword' => 'required|same:newpassword',
                    'newpassword' => 'required|string|min:6',
                    'repassword' => 'required|same:newpassword',
                ],
                [
                    'oldpassword.required' => 'Vui lòng nhập mật khẩu',
                    'newpassword.min' => 'mật khẩu phải lớn hơn 6 kí tự',
                    'newpassword.required' => 'Vui lòng nhập mật khẩu mới',
                    'repassword.required' => 'vui lòng xác nhận mật khẩu',
                    'repassword.same' => 'mật khẩu xác nhập không khớp',
                ]
            );
            $user = Auth::user();
            if(Hash::check($rq ->input('oldpassword'), Auth::user() ->password )){
                $user ->password = bcrypt($rq ->input('newpassword'));
                $user->save();
                Toastr::success('đổi mật khẩu thành công', $title = null, $options = []);
                return redirect('ad-guitardn');
            }
            if(!(Hash::check($rq ->input('oldpassword'), Auth::user() ->password ))){
                $errors = new MessageBag(['oldpassword' => ['Old password is incorrect']]);
                return back()->withErrors($errors)->withInput();
            }
            else
                return back();
        }
}
