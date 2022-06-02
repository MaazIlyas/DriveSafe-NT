<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    /**
     * Display register page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request) 
    {
        $data = $request->validated();
            if(!empty($data)) {
                $data['role'] = 'student';
                $data['name'] = data_get($data, 'username');
                unset($data['username']);
                
                $user = User::create($data);

                auth()->login($user);

                return redirect('/')->with('success', "Account successfully registered.");
            }
        }
}