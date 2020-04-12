<?php

namespace estoque\Http\Controllers\Auth;

use estoque\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    use AuthenticatesUsers;

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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function login(Request $request)
    {
        $input = $request->only('name', 'password');

        $this->validate($request, [
            'name' => 'required',
            'password' => 'required',
        ]);

        if(auth()->attempt($input))
        {
            return redirect()->route('home');
        }else{
            return redirect()->route('login')
                ->with('error','User And Password Are Wrong.');
        }

    }

}
