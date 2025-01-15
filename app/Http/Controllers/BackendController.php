<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class BackendController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function changePassword()
    {
        return view('backend.change-password');
    }

    public function updatePassword(Request $request)
    {
        // Validating 
        
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
            'new_password_confirmation' => 'same:new_password'
        ]);

        $user = auth()->user();

        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->route('change-password')->with('error', 'Old Password Does not match!');
        }

        if (Hash::check($request->new_password, $user->password)) {
            return redirect()->route('change-password')->with('error', 'New Password should be different from the Old Password!');
        }

        User::whereId($user->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()->route('change-password')->with('success', 'Password Changed Successfully.');
    }
        
}
