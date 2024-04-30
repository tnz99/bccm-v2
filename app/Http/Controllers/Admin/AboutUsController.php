<?php

namespace App\Http\Controllers\Admin;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EditAboutUsFormRequest;

class AboutUsController extends Controller
{
    // public function index()
    // {
    //     return view('admin.edit_home');
    // }
    public function about_create(){
        return view('admin.about_us.about_create');
    }
    public function store(EditAboutUsFormRequest $request){
        $validatedData = $request->validated();

        $about_us = new AboutUs;
        $about_us->about_title= $validatedData['about_title'];
        $about_us->about_description= $validatedData['about_description'];

        if($request->hasFile('about_image')){
            $file = $request->file('about_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/about_us/',$filename);
            $about_us->about_image = $filename;
            $about_us->save();

            return redirect('admin/edit_home')->with('message', 'About Us page edited successfully');
        }
    }
}
