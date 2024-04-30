<?php

namespace App\Http\Controllers\Admin\Story\Flora\Page3;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Flora\Page3\Gallery9;
use App\Http\Requests\Story\Flora\Page3\Gallery9FormRequest;

class FloraPage3Gallery9Controller extends Controller
{
    public function flora_page3_gallery9_create(){
        return view('admin.story.flora.flora_page3.gallery9.gallery9');

    }

    public function store(Gallery9FormRequest $request){
        $validatedData = $request->validated();

        $flora_page3_gallery9 = new Gallery9;
        $flora_page3_gallery9->flora_page3_gallery9_title= $validatedData['flora_page3_gallery9_title'];
        $flora_page3_gallery9->flora_page3_gallery9_subtitle= $validatedData['flora_page3_gallery9_subtitle'];
        $flora_page3_gallery9->flora_page3_gallery9_description= $validatedData['flora_page3_gallery9_description'];

        if ($request->hasFile('flora_page3_gallery9_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('flora_page3_gallery9_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/flora/flora_page3/gallery9', $filename);
            $flora_page3_gallery9->flora_page3_gallery9_image = $filename; // Replace X with 1, 2, 3, or 4
            $flora_page3_gallery9->save();
            return redirect('admin/story/flora/flora_page3/flora_page3')->with('message', 'Flora Page3 Gallery9 edited successfully');
        }
    }
}
