<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    public function index()
    {
        return view('auth.userAccount');
    }

    public function loginView()
    {
        return view('auth.login');
    }

    public function registerView()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email',  $email)->first();

        if ($user && $user->password == $password) {
            // Kullanıcı girişi başarılı
            Auth::login($user);
            session(['isLogin' => true]);
            session(['userName' => $user->name]);
            session(['userEmail' => $user->email]);
            session(['userId' => $user->id]);


            return redirect()->route('notes.index');
        } else {
            // Kullanıcı girişi başarısız
            return back()->withInput()->withErrors(['login' => 'Invalid user']);
        }
    }

    public function register(Request $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
        ]);

        return redirect()->route('login');
    }

    public function logout()
    {
        session()->flush();
        auth()->logout();
        return redirect()->route('login');
    }

    public function destroy(User $user)
    {
        $user = User::findOrFail(session('userId'));
        $user->delete();
        return redirect()->route('logout')->with('delete', 'deleted');
    }

    public function updateInfo(Request $request)
    {
        $user = User::findOrFail(session('userId'));

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $user->update($validatedData);
        session(['userName' => $user->name]);
        session(['userEmail' => $user->email]);

        return redirect()->route('userAccount')->with('updateInfo', 'Profile Updated!');
    }


    public function updatePassword(Request $request)
    {
        $user = User::findOrFail(session('userId'));

        $validatedData = $request->validate([
            'password' => 'required|string',
            'newpassword' => 'required|string',
        ]);

        if ($user->password === $validatedData['password']) {
            $user->update(['password' => $validatedData['newpassword']]);

            return redirect()->route('userAccount')->with('correctPassword', 'Password updated.');
        }

        return redirect()->route('userAccount')->withErrors(['falsePassword' => 'Invalid password']);
    }
}
