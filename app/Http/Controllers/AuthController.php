<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function processLogin(Request $request)
    {
        try {
            $user = user::query()
                ->where('email', $request->get('email'))
                ->where('password', $request->get('password'))
                ->first();
            $level = $user->level;
            if ($level !== 0 && $level !== 1) {
                return redirect()->route('login');
            }
            session()->put('id', $user->id);
            session()->put('name', $user->name);
            session()->put('avatar', $user->avatar);
            session()->put('level', $user->level);

            if ($level == 1) {
                return redirect()->route('lecturers.index');
            } else {
                return redirect()->route('students.index');
            }
        } catch (\Throwable $th) {
            return redirect()->route('login');
            
        }
    }
    public function logout()
    {
        session()->flush();
        return redirect()->route('welcome');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function callback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $user = User::updateOrCreate([
            'email' => $user->getEmail(),
        ], [
            'name' => $user->getName(),
            'avatar' => $user->getAvatar(),
        ]);

        Auth::login($user);

        return redirect()->route('register');
    }

    public function registering(Request $request)
    {
        $password = Hash::make($request->password);

        if (auth()->check()) {
            User::where('id', auth()->user()->id)
                ->update([
                    'password' => $password
                ]);
        } else {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $password,
            ]);
            Auth::login($user);
        }
    }
}
