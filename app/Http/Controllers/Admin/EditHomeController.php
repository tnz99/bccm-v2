<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EditHomeFormRequest;
use App\Models\EditHome;

class EditHomeController extends Controller
{
    public function index()
    {
        $edit_home = EditHome::orderBy('updated_at', 'desc')->first();
        return view('admin.edit_home_page.home_create', compact('edit_home'));
    }

    public function home_create(){
        return view('admin.edit_home_page.home_create');
    }
    public function store(EditHomeFormRequest $request){
        $validatedData = $request->validated();

        $edit_home = new EditHome;
        $edit_home->home_title = $validatedData['home_title'];
        $edit_home->home_subtitle = $validatedData['home_subtitle'];

        if($request->hasFile('home_image')){
            $file = $request->file('home_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/edit_home/',$filename);
            $edit_home->home_image = $filename;
            $edit_home->save();

            return redirect('admin/edit_home')->with('message', 'home page edited successfully');
        }
    }
}
