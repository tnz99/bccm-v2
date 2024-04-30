<?php

namespace App\Http\Controllers\Admin\Story\Flora\Page2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Flora\Page2\Gallery7;
use App\Http\Requests\Story\Flora\Page2\Gallery7FormRequest;

class FloraPage2Gallery7Controller extends Controller
{
    public function flora_page2_gallery7_create(){
        return view('admin.story.flora.flora_page2.gallery7.gallery7');

    }

    public function store(Gallery7FormRequest $request){
        $validatedData = $request->validated();

        $flora_page2_gallery7 = new Gallery7;
        $flora_page2_gallery7->flora_page2_gallery7_title= $validatedData['flora_page2_gallery7_title'];
        $flora_page2_gallery7->flora_page2_gallery7_subtitle= $validatedData['flora_page2_gallery7_subtitle'];
        $flora_page2_gallery7->flora_page2_gallery7_description= $validatedData['flora_page2_gallery7_description'];

        if ($request->hasFile('flora_page2_gallery7_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('flora_page2_gallery7_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/flora/flora_page2/gallery7', $filename);
            $flora_page2_gallery7->flora_page2_gallery7_image = $filename; // Replace X with 1, 2, 3, or 4
            $flora_page2_gallery7->save();
            return redirect('admin/story/flora/flora_page2/flora_page2')->with('message', 'Flora Page2 Gallery 7 edited successfully');
        }
    }
}
