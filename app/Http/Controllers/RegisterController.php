<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Str;

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
        //Validating request
        $data = $request->validated();
            if(!empty($data)) {
                //By default user is student
                $data['role'] = 'student';


                $data['username'] = data_get($data, 'username');
                $data['salt'] = Str::random(16);
                $password = $data['password'] . $data['salt'];
                $data['password'] = bcrypt($password);
                //unset($data['username']);
                
                $user = User::create($data);

                auth()->login($user);

                return redirect('/')->with('success', "Account successfully registered.");
            }
        }
}