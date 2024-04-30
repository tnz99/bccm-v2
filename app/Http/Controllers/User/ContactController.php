<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class contactController extends Controller
{
    public function index()
    {
        $links = [''];
        $cnavBg = "the-spring-cnav-bg";
        $cnavInnerBorder = "border-gray";

        $contact = Contact::orderBy('updated_at', 'desc')->first();


        return view('user.contact', [
            'darkThemeFlag' => true,
            'bodyClass' => 'contact',
            'contact' => $contact,
            'links' => $links,
            'cnavBg' => $cnavBg,
            'cnavInnerBorder' => $cnavInnerBorder
        ]);
    }
}
