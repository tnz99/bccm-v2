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
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'new_password' => 'required|min:8|different:current_password',
            'new_password_confirmation' => 'required|same:new_password',
        ]);
    
        // Validate the current password
        $user = Auth::user();
        if (!Hash::check($request->current_password, $user->password)) {
            $validator->errors()->add('current_password', 'The current password is incorrect.');
        }
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    
        // Update the password
        $user->password = Hash::make($request->new_password);
        $user->save();
    
        return redirect()->route('panel.profile')->with('success', 'Password changed successfully!');
    }
    
    
    

  
}