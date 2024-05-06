<?php

namespace App\Http\Controllers\Admin\Story\Flora\Page3;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Flora\Page3\Gallery2;
use App\Http\Requests\Story\Flora\Page3\Gallery2FormRequest;

class FloraPage3Gallery2Controller extends Controller
{
    public function flora_page3_gallery2_create(){
        return view('admin.story.flora.flora_page3.gallery2.gallery2');

    }

    public function store(Gallery2FormRequest $request){
        $validatedData = $request->validated();

        $flora_page3_gallery2 = new Gallery2;
        $flora_page3_gallery2->flora_page3_gallery2_title= $validatedData['flora_page3_gallery2_title'];
        $flora_page3_gallery2->flora_page3_gallery2_subtitle= $validatedData['flora_page3_gallery2_subtitle'];
        $flora_page3_gallery2->flora_page3_gallery2_description= $validatedData['flora_page3_gallery2_description'];

        if ($request->hasFile('flora_page3_gallery2_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('flora_page3_gallery2_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/flora/flora_page3/gallery2', $filename);
            $flora_page3_gallery2->flora_page3_gallery2_image = $filename; // Replace X with 1, 2, 3, or 4
            $flora_page3_gallery2->save();
            return redirect('admin/story/flora/flora_page3/flora_page3')->with('message', 'Flora Page3 Gallery2 edited successfully');
        }
    }
}
