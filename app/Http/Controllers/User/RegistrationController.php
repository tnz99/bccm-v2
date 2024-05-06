<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Monarobase\CountryList\CountryListFacade as Country;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        $cnavBg = "the-climate-cnav-bg"; // Add this line or adjust as needed
        $cnavInnerBorder = "border-gray"; // Add this line or adjust as needed
        $countries = Country::getList();

        return view('user.register')->with('countries', $countries)
                               ->with('darkThemeFlag', false)
                               ->with('cnavBg', $cnavBg)
                               ->with('cnavInnerBorder', $cnavInnerBorder);
    }

    public function register(Request $request)
    {
        try {
            User::create([
                'name' => $request->input('name'),
                'country' => $request->input('country'),
                'email' => $request->input('email'),
                'password' => "DefaultPassword",
            ]);

            return redirect()->route('register')->with('success', true);
        } catch (\Exception $e) {
            // Check if the exception is related to a unique constraint violation
            if ($e->errorInfo[1] == 1062) {
                // Handle the duplicate entry error
                return back()->withInput()->withErrors(['email' => 'Email address already exists.']);
            }

            // Rethrow the exception if it's not related to a unique constraint violation
            throw $e;
        }
    }
}
