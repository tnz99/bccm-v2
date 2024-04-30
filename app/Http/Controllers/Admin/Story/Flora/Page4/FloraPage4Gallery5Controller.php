<?php

namespace App\Http\Controllers\Admin\Story\Flora\Page4;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Story\Flora\Page4\Gallery5;
use App\Http\Requests\Story\Flora\Page4\Gallery5FormRequest;

class FloraPage4Gallery5Controller extends Controller
{
    public function flora_page4_gallery5_create(){
        return view('admin.story.flora.flora_page4.gallery5.gallery5');

    }

    public function store(Gallery5FormRequest $request){
        $validatedData = $request->validated();

        $flora_page4_gallery5 = new Gallery5;
        $flora_page4_gallery5->flora_page4_gallery5_title= $validatedData['flora_page4_gallery5_title'];
        $flora_page4_gallery5->flora_page4_gallery5_subtitle= $validatedData['flora_page4_gallery5_subtitle'];
        $flora_page4_gallery5->flora_page4_gallery5_description= $validatedData['flora_page4_gallery5_description'];

        if ($request->hasFile('flora_page4_gallery5_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('flora_page4_gallery5_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/flora/flora_page4/gallery5', $filename);
            $flora_page4_gallery5->flora_page4_gallery5_image = $filename; // Replace X with 1, 2, 3, or 4
            $flora_page4_gallery5->save();
            return redirect('admin/story/flora/flora_page4/flora_page4')->with('message', 'Flora Page4 Gallery5 edited successfully');
        }
    }
}
