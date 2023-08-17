<?php

namespace App\AuthLibrary;

use App\Models\User; // Adjust this based on your user model namespace

class CustomAuth
{
    public function register(array $data)
    {
        // Your registration logic here
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        return $user;
    }

    public function login(array $credentials)
    {
        // Your login logic here
        if (auth()->attempt($credentials)) {
            return true;
        }else {
            return false;
        }
 
    }

    public function logout()
    {
        // Your logout logic here
        auth()->logout();
    }
}
