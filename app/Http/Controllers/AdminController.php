<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Project;
use Illuminate\Http\Request;

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

    public function members(Request $request, Member $member){
        
        if ($request->method() == 'GET') {

            return view('admin.edit-member', [
                'title' => 'Edit Member',
                'member' => $member,
            ]);
        }
    }
}
