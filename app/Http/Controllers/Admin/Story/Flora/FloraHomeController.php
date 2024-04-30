<?php

namespace App\Http\Controllers\Admin\Story\Flora;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Flora\FloraHome;
use App\Http\Requests\Story\Flora\FloraHomeFormRequest;

class FloraHomeController extends Controller
{
    public function flora_home_create(){
        return view('admin.story.flora.flora_home.flora_home');
    }

    public function store(FloraHomeFormRequest $request){
        $validatedData = $request->validated();

        $flora_home = new FloraHome;
        $flora_home->flora_home_title= $validatedData['flora_home_title'];
        $flora_home->flora_home_description= $validatedData['flora_home_description'];

        if ($request->hasFile('flora_home_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('flora_home_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/flora/flora_home/', $filename);
            $flora_home->flora_home_image = $filename; // Replace X with 1, 2, 3, or 4
            $flora_home->save();
            return redirect('admin/story/flora/flora_page')->with('message', 'Flora Home Page edited successfully');
        }
    }
}
