<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EditMember extends Component
{
    use WithFileUploads;
    
    public $member;

    public $full_name;
    public $position;
    public $image;
    public $start_date;
    public $description;

    public function mount(){
        $this->full_name = $this->member->name;
        $this->position = $this->member->position;
        $this->image = $this->member->image;
        $this->start_date = $this->member->start_date;
        $this->description = $this->member->description;

    }
    public function updateMember(){
        $this->validate([
            'full_name' => 'required',
            'position' => 'required',
            'image' => 'nullable|image|max:1024', // Optional image validation
            'start_date' => 'nullable|date',
            'description' => 'required',
        ]);

        if ($this->image) {
            // Delete old image if exists
            if ($this->member->image && Storage::exists('public/' . $this->member->image)) {
                Storage::delete('public/' . $this->member->image);
            }

            // Store new image
            $imagePath = $this->image->store('members', 'public');
        } else {
            $imagePath = $this->member->image;
        }

        // Update member data
        $this->member->update([
            'name' => $this->full_name,
            'position' => $this->position,
            'image' => $imagePath,
            'start_date' => $this->start_date,
            'description' => $this->description,
        ]);

        session()->flash('success', 'Member updated successfully.');
        
        return redirect()->route('edit_member',[$this->member->id]);
    }

    public function render()
    {
        return view('livewire.admin.edit-member');
    }
}
