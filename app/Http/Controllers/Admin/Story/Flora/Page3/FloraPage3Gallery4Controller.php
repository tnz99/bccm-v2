<?php

namespace App\Http\Controllers\Admin\Story\Flora\Page3;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Flora\Page3\Gallery4;
use App\Http\Requests\Story\Flora\Page3\Gallery4FormRequest;

class FloraPage3Gallery4Controller extends Controller
{
    public function flora_page3_gallery4_create(){
        return view('admin.story.flora.flora_page3.gallery4.gallery4');

    }

    public function store(Gallery4FormRequest $request){
        $validatedData = $request->validated();

        $flora_page3_gallery4 = new Gallery4;
        $flora_page3_gallery4->flora_page3_gallery4_title= $validatedData['flora_page3_gallery4_title'];
        $flora_page3_gallery4->flora_page3_gallery4_subtitle= $validatedData['flora_page3_gallery4_subtitle'];
        $flora_page3_gallery4->flora_page3_gallery4_description= $validatedData['flora_page3_gallery4_description'];

        if ($request->hasFile('flora_page3_gallery4_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('flora_page3_gallery4_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/flora/flora_page3/gallery4', $filename);
            $flora_page3_gallery4->flora_page3_gallery4_image = $filename; // Replace X with 1, 2, 3, or 4
            $flora_page3_gallery4->save();
            return redirect('admin/story/flora/flora_page3/flora_page3')->with('message', 'Flora Page3 Gallery4 edited successfully');
        }
    }
}
