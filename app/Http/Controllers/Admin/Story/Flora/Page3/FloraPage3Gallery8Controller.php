<?php

namespace App\Http\Controllers\Admin\Story\Flora\Page3;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Flora\Page3\Gallery8;
use App\Http\Requests\Story\Flora\Page3\Gallery8FormRequest;

class FloraPage3Gallery8Controller extends Controller
{
    public function flora_page3_gallery8_create(){
        return view('admin.story.flora.flora_page3.gallery8.gallery8');

    }

    public function store(Gallery8FormRequest $request){
        $validatedData = $request->validated();

        $flora_page3_gallery8 = new Gallery8;
        $flora_page3_gallery8->flora_page3_gallery8_title= $validatedData['flora_page3_gallery8_title'];
        $flora_page3_gallery8->flora_page3_gallery8_subtitle= $validatedData['flora_page3_gallery8_subtitle'];
        $flora_page3_gallery8->flora_page3_gallery8_description= $validatedData['flora_page3_gallery8_description'];

        if ($request->hasFile('flora_page3_gallery8_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('flora_page3_gallery8_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/flora/flora_page3/gallery8', $filename);
            $flora_page3_gallery8->flora_page3_gallery8_image = $filename; // Replace X with 1, 2, 3, or 4
            $flora_page3_gallery8->save();
            return redirect('admin/story/flora/flora_page3/flora_page3')->with('message', 'Flora Page3 Gallery8 edited successfully');
        }
    }
}
