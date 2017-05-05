<?php
/**
 * Created by PhpStorm.
 * User: hungnguyen
 * Date: 25/04/2017
 * Time: 00:06
 */

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(){
        return view('user.login');
    }

    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            ["email" => $request->email, "password" => $request->password, "status" => "active"],
            $request->has('remember')
        );
    }


}