<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class Logout extends Component
{
        // logout function
        public function logout()
        {
            Session::invalidate();
            Session::regenerateToken();
    
            return redirect('/login');
        }
        
    public function render()
    {
        return view('livewire.admin.logout');
    }
}
