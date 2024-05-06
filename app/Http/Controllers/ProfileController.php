<?php

namespace App\Http\Controllers;

use App\Models\RoleModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function show()
    {
        $user = User::getRecord()->where('id', auth()->user()->id)->first();
        $getRole = RoleModel::get(); // Assuming Role is your model for roles

        return view('panel.profile.profile', compact('user', 'getRole'));
    }
    
    public function editProfile(Request $request)
{
    $user = Auth::user();

    // Fetch all roles
    $getRole = RoleModel::getRecord();

    // Validate the request data
    $request->validate([
        'fullName' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
        'profileImage' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Assuming max file size is 2MB
    ]);

    // Update user details
    $user->name = $request->input('fullName');
    $user->email = $request->input('email');

    // Handle profile image update
    if ($request->hasFile('profileImage')) {
        $image = $request->file('profileImage');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/profiles'), $imageName); // Move uploaded file to a public directory
        $user->profile_image = $imageName;
    }

    $user->save();

    

    // Pass $getRole to the view along with other necessary data
    return view('panel.profile.edit', compact('user', 'getRole'))->with('success', 'Profile updated successfully');
}

public function changePassword(Request $request)
{
    // Validate the request data
    $request->validate([
        'current_password' => 'required',
        'new_password' => ['required', 'min:8', 'different:current_password', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/'],
        'new_password_confirmation' => 'required|same:new_password',
    ]);

    // Get the authenticated user
    $user = Auth::user();

    // Check if the provided current password matches the user's actual password
    if (!Hash::check($request->current_password, $user->password)) {
        return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.'])->withInput();
    }

    // Update the user's password
    $user->password = Hash::make($request->new_password);
    $user->save();

    // Redirect back with success message
    return redirect()->route('panel.profile')->with('success', 'Password changed successfully!');
}







    
    
    

  
}