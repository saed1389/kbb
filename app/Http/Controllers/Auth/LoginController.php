<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request): RedirectResponse
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            $notification = array(
                'message' => "Oturum açma işlemi başarılı oldu.",
                'alert-type' => 'success'
            );
            if (auth()->user()->type == 'admin') {
                return redirect()->route('admin.home')->with($notification);
            } else if (auth()->user()->type == 'user') {
                return redirect()->route('user.home')->with($notification);
            } else {
                return redirect()->route('/')->with($notification);
            }
        } else {
            $notification = array(
                'message' => "E-posta adresi VEYA şifre yanlış.",
                'alert-type' => 'error'
            );
            return redirect()->route('login')
                ->with($notification);
        }

    }
}
