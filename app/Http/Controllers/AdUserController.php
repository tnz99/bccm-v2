<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\RoleModel;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Mail\NewAdminNotification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdUserController extends Controller
{
    public function list()
    {
        $data['getRecord']= User::getRecord();
        return view('panel.aduser.list', $data);
    }

    public function add()
    {
        $data['getRole']= RoleModel::getRecord();
        return view('panel.aduser.add', $data);
    }



    
    public function edit($id)
    {
        $data['getRecord']= User::getSingle($id);
        $data['getRole']= RoleModel::getRecord();
        return view('panel.aduser.edit', $data);
    }



    

    public function insert(Request $request)
{
    // Validate the request data
    request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/',
        'confirmpassword' => 'required|same:password',
        'role_id' => 'required',
    ]);

    // Create a new user (admin)
    $user = new User;
    $user->name = trim($request->name);
    $user->email = trim($request->email);
    $user->password = Hash::make($request->password);
  
    $user->role_id = trim($request->role_id);
    
    $user->save();

    // Retrieve the role information
    $role = RoleModel::find($request->role_id);

    // Pass the password along with the user instance
    $password = $request->password;

    // Send email notification to the new admin
    Mail::to($user->email)->send(new NewAdminNotification($user, $password, $role));

    // Redirect with success message
    return redirect('panel/aduser')->with('success', "Admin successfully created");
}



public function update($id, Request $request)
{
    // Retrieve the user record
    $user = User::getSingle($id);

    // Validate the request data
    $request->validate([
        'name' => 'required|string|max:255',
        'role_id' => 'required|numeric',
        'password_changed' => 'sometimes|in:1', // Validation rule for the hidden input field
        'password' => [
            Rule::requiredIf(function () use ($request) {
                return $request->input('password_changed') == 1;
            }),
            'string',
            'min:8', // Minimum length of 8 characters
            'regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/', // Regex pattern
        ],
    ]);
    

    // Update user properties
    $user->name = trim($request->name);
    $user->role_id = trim($request->role_id);

    // Update password only if it's being changed
    if (!empty($request->password)) {
        $user->password = Hash::make($request->password);
    }

    // Save the changes
    $user->save();

    // Redirect with success message
    return redirect('panel/aduser')->with('success', "Admin successfully updated");
}

    public function delete($id)
    {
        $user =  User::getSingle($id);
        $user->delete();

        return redirect('panel/aduser')->with('success', "Admin successfully deleted");
    }
}