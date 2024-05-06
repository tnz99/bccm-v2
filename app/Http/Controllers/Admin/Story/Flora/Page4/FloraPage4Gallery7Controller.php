<?php

namespace App\Http\Controllers\Admin\Story\Flora\Page4;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Flora\Page4\Gallery7;
use App\Http\Requests\Story\Flora\Page4\Gallery7FormRequest;

class FloraPage4Gallery7Controller extends Controller
{
    public function flora_page4_gallery7_create(){
        return view('admin.story.flora.flora_page4.gallery7.gallery7');

    }

    public function store(Gallery7FormRequest $request){
        $validatedData = $request->validated();

        $flora_page4_gallery7 = new Gallery7;
        $flora_page4_gallery7->flora_page4_gallery7_title= $validatedData['flora_page4_gallery7_title'];
        $flora_page4_gallery7->flora_page4_gallery7_subtitle= $validatedData['flora_page4_gallery7_subtitle'];
        $flora_page4_gallery7->flora_page4_gallery7_description= $validatedData['flora_page4_gallery7_description'];

        if ($request->hasFile('flora_page4_gallery7_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('flora_page4_gallery7_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/flora/flora_page4/gallery7', $filename);
            $flora_page4_gallery7->flora_page4_gallery7_image = $filename; // Replace X with 1, 2, 3, or 4
            $flora_page4_gallery7->save();
            return redirect('admin/story/flora/flora_page4/flora_page4')->with('message', 'Flora Page4 Gallery7 edited successfully');
        }
    }
}
