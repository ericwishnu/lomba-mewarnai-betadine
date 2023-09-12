<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function updatePassword(Request $request)
    {
        $data =  $request->validate([
            'new_password' => 'required|min:6|confirmed'
        ]);

        $user = auth()->user();
        $user->password = bcrypt($data['new_password']);
        $user->save();

        return redirect()->route('superadmin.profile.edit')->with(['success' => 'Change Password Success']);
    }
    public function editProfile()
    {
        return view('admin.profile.edit');
    }
}
