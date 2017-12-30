<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'ad-guitardn';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|same:password'
        ],
        [
            'username.required' => 'vui lòng nhập tên',
            'email.required' => 'Vui lòng nhập mật khẩu',
            'email.email' => 'định dạng này không phải Email, vui lòng kiểm tra lại',
            'email.unique' => 'Email này đã có người sử dụng',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password_confirmation.required' => 'vui lòng xác nhận mật khẩu',
            'password_confirmation.same' => 'Mật khẩu xác nhận không khớp',
            'password.min' => 'Mật khẩu phải nhiều hơn 6 kí tự'

    ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
