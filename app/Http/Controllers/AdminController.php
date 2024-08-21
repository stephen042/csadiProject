<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Member;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        if ($request->method() == 'GET') {

            $members = Member::orderBy('id', 'desc')->get();
            $projects = Project::orderBy('id', 'desc')->get();

            return view('admin.dashboard', [
                'title' => 'Dashboard',
                'members' => $members,
                'projects' => $projects,
            ]);
        }
    }

    public function members(Request $request, Member $member)
    {
        if ($request->method() == 'GET') {
            return view('admin.edit-member', [
                'title' => 'Edit Member',
                'member' => $member,
            ]);
        } else if ($request->method() == 'POST') {
            $validatedData = $request->validate([
                'full_name' => 'required',
                'position' => 'required',
                'image' => 'nullable|image|max:5024', // Optional image validation
                'start_date' => 'nullable|date',
                'description' => 'required',
            ]);

            // Handle image upload if provided
            if ($request->hasFile('image')) {
                // Delete the old image if it exists
                if ($member->image) {
                    Storage::disk('public')->delete($member->image);
                }
                
                $imagePath = $request->file('image')->store('members', 'public');
            } else {
                $imagePath = $member->image;
            }

            // Update member data
            $member->update([
                'name' => $validatedData['full_name'],
                'position' => $validatedData['position'],
                'image' => $imagePath,
                'start_date' => $validatedData['start_date'],
                'description' => $validatedData['description'],
                'updated_at' => now(),
            ]);

            return redirect()->route('edit_member', [$member->id])->with('success', 'Member updated successfully.');
        }
    }

    public function deleteMember(Member $member)
    {
        $member->delete();
        return redirect()->route('dashboard')->with('success', 'Member deleted successfully.');
    }
}
