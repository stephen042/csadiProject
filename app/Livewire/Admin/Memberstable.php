<?php

namespace App\Livewire\Admin;

use App\Models\Member;
use Livewire\Component;

class Memberstable extends Component
{
    public $members;

    public function deleteMember($id)
    {
        // Find the member by ID
        $member = Member::findOrFail($id);
        // Delete the member
        $member->delete();
        session()->flash('success', 'Member deleted successfully.');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.admin.memberstable');
    }
}
