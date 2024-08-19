<?php

namespace App\Livewire\Admin;

use App\Models\Member;
use Livewire\Component;

class Memberstable extends Component
{
    public $members;


    public function render()
    {
        return view('livewire.admin.memberstable');
    }
}
