<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Member;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        if ($request->method() == 'GET') {

            $members = Member::orderBy('id', 'desc')->get();
            $projects = Project::orderBy('id', 'desc')->take(3)->get();

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

    public function createMember(Request $request)
    {
        if ($request->method() == 'GET') {

            $members = Member::orderBy('id', 'desc')->get();
            return view('admin.create-member', [
                'title' => 'Create Member',
                'members' => $members,
            ]);
        } elseif($request->method() == 'POST'){
            $validatedData = $request->validate([
                'full_name' => 'required',
                'position' => 'required',
                'image' => 'required|image|max:5024', // Optional image validation
                'start_date' => 'nullable|date',
                'description' => 'required',
            ]);

            // Handle image upload if provided
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('members', 'public');
            }

            // Create new member
            Member::create([
                'name' => $validatedData['full_name'],
                'position' => $validatedData['position'],
                'image' => $imagePath,
               'start_date' => $validatedData['start_date'],
               'description' => $validatedData['description'],
            ]);
            
            return redirect()->route('create_member')->with('success', 'Member created successfully.');
        }
    }

    public function allMembers(Request $request)
    {
        if ($request->method() == 'GET') {

            $members = Member::orderBy('id', 'desc')->paginate(10);
            return view('admin.all-members', [
                'title' => 'Members',
                'members' => $members,
            ]);
        }
    }

    public function deleteMember(Member $member)
    {
        $member->delete();
        return redirect()->route('dashboard')->with('success', 'Member deleted successfully.');
    }

    public function createProject(Request $request)
    {
        if ($request->method() == 'GET') {
            $projects = Project::orderBy('id', 'desc')->get();

            return view('admin.create-project', [
                'title' => 'Create Projects',
                'projects' => $projects,
            ]);
        } elseif ($request->method() == 'POST') {

            $validatedData = $request->validate([
                'heading' => 'required',
                'placeholder_image' => 'required|image|max:5024',
                'location' => 'required',
                'target_beneficiaries' => 'required',
                'images.*' => 'image|max:5024',
                'funded_by' => 'nullable',
                'start_date' => 'required|date',
                'end_date' => 'nullable|date|after_or_equal:start_date',
                'description' => 'required',
                'facebook_link' => 'nullable|url',
            ]);

            // Store the placeholder image
            $placeholderImagePath = $request->file('placeholder_image')->store('project_placeholder_images', 'public');

            // Store multiple project images
            $projectImages = [];

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imagePath = $image->store('project_images', 'public');
                    $projectImages[] = $imagePath;
                }
            }

            // Create the project
            Project::create([
                'user_id' => Auth::user()->id,
                'heading' => $validatedData['heading'],
                'placeholder_image' => $placeholderImagePath,
                'location' => $validatedData['location'],
                'target_beneficiaries' => $validatedData['target_beneficiaries'],
                'images' => json_encode($projectImages),
                'funded_by' => $validatedData['funded_by'],
                'starting_date' => $validatedData['start_date'],
                'ending_date' => $validatedData['end_date'],
                'description' => $validatedData['description'],
                'facebook_link' => $validatedData['facebook_link'],
            ]);

            return redirect()->route('create_project')->with('success', 'Project created successfully.');
        }
    }

    public function editProject(Request $request, Project $project)
    {
        if ($request->method() == 'GET') {

            return view('admin.edit-project', [
                'title' => 'Edit Project',
                'project' => $project,
            ]);
        }

        if ($request->method() == 'POST') {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'heading' => 'required|string|max:255',
                'placeholder_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'location' => 'required|string|max:255',
                'target_beneficiaries' => 'required|string|max:255',
                'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'funded_by' => 'required|string|max:255',
                'start_date' => 'required|date',
                'end_date' => 'nullable|date',
                'description' => 'required|string',
                'facebook_link' => 'nullable|url',
            ]);

            // Update project details
            $project->heading = $validatedData['heading'];
            $project->location = $validatedData['location'];
            $project->target_beneficiaries = $validatedData['target_beneficiaries'];
            $project->funded_by = $validatedData['funded_by'];
            $project->starting_date = $validatedData['start_date'];
            $project->ending_date = $validatedData['end_date'];
            $project->description = $validatedData['description'];
            $project->facebook_link = $validatedData['facebook_link'];

            // Handle placeholder image upload
            if ($request->hasFile('placeholder_image')) {
                $placeholderImagePath = $request->file('placeholder_image')->store('project_placeholder_images', 'public');
                $project->placeholder_image = $placeholderImagePath;
            }

            // Handle multiple images upload
            if ($request->hasFile('images')) {
                $images = [];
                foreach ($request->file('images') as $image) {
                    $images[] = $image->store('project_images', 'public');
                }
                $project->images = json_encode($images);
            }

            // Save the updated project
            $project->save();

            // Redirect back with success message
            return redirect()->route('edit_project', $project->id)->with('success', 'Project updated successfully!');
        }
    }

    public function allProjects(Request $request)
    {
        if ($request->method() == 'GET') {
            $projects = Project::orderBy('id', 'desc')->paginate(6);

            return view('admin.all-projects', [
                'title' => 'Projects',
                'projects' => $projects,
            ]);
        }
    }

    public function profile(Request $request)
    {
        if ($request->method() == 'GET') {
            
            return view('admin.profile');
        }

        if ($request->isMethod('post')) {
            // Validate the request
            $request->validate([
                'old_password' => 'required',
                'password' => 'required|min:6|confirmed',
            ]);
    
            // Check if the old password matches
            if (!Hash::check($request->old_password, Auth::user()->password)) {
                return back()->withErrors(['old_password' => 'The old password does not match our records.']);
            }
    
            // Update the user's password
            $user_id = Auth::user()->id;
            $result = User::where("id","$user_id")->update([
                'password' => Hash::make($request->password)
            ]);
            // $user->password = Hash::make($request->password);
            // $user->save();
    
            return redirect()->back()->with('success', 'Password updated successfully!');
        }
    }
}
