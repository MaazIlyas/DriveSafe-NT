<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display login page.
     * 
     * @return Renderable
     */
    public function show()
    {
        return view('auth.login');
    }

    /**
     * Handle account login request
     * 
     * @param LoginRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();
        $user_found = User::where(['email' => $credentials['email']])->first();
        // data_get function contains 3 params, 1st one is object or array, 
        // 2nd one is key which we want to get and third one is default value if data not exist.
        if(!empty($user_found)) {

            //Getting the salt, concatenating it with password and checking it by hashing.
            $salt = data_get($user_found, 'salt', '');
            $password = $credentials['password'] . $salt;

            if (!Hash::check($password, $user_found->password)) {
                return redirect()->to('login')->withErrors(trans('auth.failed'));
            }
        }
        
        Auth::login($user_found);

        return $this->authenticated($request, $user_found);
    }

    /**
     * Handle response after user authenticated
     * 
     * @param Request $request
     * @param Auth $user
     * 
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user) 
    {
        return redirect()->intended();
    }

}