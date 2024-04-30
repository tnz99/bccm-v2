<?php

namespace App\Http\Controllers\Admin\Story\Flora\Page4;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Flora\Page4\Gallery3;
use App\Http\Requests\Story\Flora\Page4\Gallery3FormRequest;

class FloraPage4Gallery3Controller extends Controller
{
    public function flora_page4_gallery3_create(){
        return view('admin.story.flora.flora_page4.gallery3.gallery3');

    }

    public function store(Gallery3FormRequest $request){
        $validatedData = $request->validated();

        $flora_page4_gallery3 = new Gallery3;
        $flora_page4_gallery3->flora_page4_gallery3_title= $validatedData['flora_page4_gallery3_title'];
        $flora_page4_gallery3->flora_page4_gallery3_subtitle= $validatedData['flora_page4_gallery3_subtitle'];
        $flora_page4_gallery3->flora_page4_gallery3_description= $validatedData['flora_page4_gallery3_description'];

        if ($request->hasFile('flora_page4_gallery3_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('flora_page4_gallery3_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/flora/flora_page4/gallery3', $filename);
            $flora_page4_gallery3->flora_page4_gallery3_image = $filename; // Replace X with 1, 2, 3, or 4
            $flora_page4_gallery3->save();
            return redirect('admin/story/flora/flora_page4/flora_page4')->with('message', 'Flora Page4 Gallery3 edited successfully');
        }
    }
}
