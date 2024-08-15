<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        if ($request->method() == 'GET') {
            
            return view('admin.dashboard', [
                'title' => 'Dashboard',
            ]);
        }
    }
}
