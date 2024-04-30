<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;

class AdminContactController extends Controller
{
    // public function index()
    // {
    //     return view('admin.edit_home');
    // }
    public function contact_create(){
        return view('admin.contact.contact');
    }
    public function store(ContactFormRequest $request){
        $validatedData = $request->validated();

        $contact = new Contact;
        $contact->contact_title= $validatedData['contact_title'];
        $contact->contact_description= $validatedData['contact_description'];

        if($request->hasFile('contact_image')){
            $file = $request->file('contact_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/contact/',$filename);
            $contact->contact_image = $filename;
            $contact->save();

            return redirect('admin/edit_home')->with('message', 'Contact page edited successfully');
        }
    }
}
