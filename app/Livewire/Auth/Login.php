<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Login extends Component
{
    public $email;
    public $password;

    public function adminLogin()
    {
        $validated = $this->validate([
            'email' => ['required', 'string', 'lowercase', 'email'],
            'password' => ['required'],
        ]);

        // Attempt to authenticate the user with the provided credentials
        if (Auth::attempt($validated)) {
            // Regenerate the session to prevent fixation attacks
            Session::regenerate();

            // Determine the authenticated user
            $user = Auth::user();

            // Determine the route based on the user's role
            if ($user->role == 2) {
                $route = 'dashboard';
            }else {
                return redirect('/login')->with('error', 'You are no longer an admin');
            }
            

            return redirect()->route($route);
        }

        // If authentication fails, redirect back with an error message
        return redirect('/login')->with('error', 'Invalid login details');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
