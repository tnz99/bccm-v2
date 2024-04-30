<?php

namespace App\Http\Controllers\Admin\Story\Flora\Page3;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Flora\Page3\Gallery5;
use App\Http\Requests\Story\Flora\Page3\Gallery5FormRequest;

class FloraPage3Gallery5Controller extends Controller
{
    public function flora_page3_gallery5_create(){
        return view('admin.story.flora.flora_page3.gallery5.gallery5');

    }

    public function store(Gallery5FormRequest $request){
        $validatedData = $request->validated();

        $flora_page3_gallery5 = new Gallery5;
        $flora_page3_gallery5->flora_page3_gallery5_title= $validatedData['flora_page3_gallery5_title'];
        $flora_page3_gallery5->flora_page3_gallery5_subtitle= $validatedData['flora_page3_gallery5_subtitle'];
        $flora_page3_gallery5->flora_page3_gallery5_description= $validatedData['flora_page3_gallery5_description'];

        if ($request->hasFile('flora_page3_gallery5_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('flora_page3_gallery5_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/flora/flora_page3/gallery5', $filename);
            $flora_page3_gallery5->flora_page3_gallery5_image = $filename; // Replace X with 1, 2, 3, or 4
            $flora_page3_gallery5->save();
            return redirect('admin/story/flora/flora_page3/flora_page3')->with('message', 'Flora Page3 Gallery5 edited successfully');
        }
    }
}
