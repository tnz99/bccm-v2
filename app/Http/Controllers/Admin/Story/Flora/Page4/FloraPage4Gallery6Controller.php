<?php

namespace App\Http\Controllers\Admin\Story\Flora\Page4;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Flora\Page4\Gallery6;
use App\Http\Requests\Story\Flora\Page4\Gallery6FormRequest;

class FloraPage4Gallery6Controller extends Controller
{
    public function flora_page4_gallery6_create(){
        return view('admin.story.flora.flora_page4.gallery6.gallery6');

    }

    public function store(Gallery6FormRequest $request){
        $validatedData = $request->validated();

        $flora_page4_gallery6 = new Gallery6;
        $flora_page4_gallery6->flora_page4_gallery6_title= $validatedData['flora_page4_gallery6_title'];
        $flora_page4_gallery6->flora_page4_gallery6_subtitle= $validatedData['flora_page4_gallery6_subtitle'];
        $flora_page4_gallery6->flora_page4_gallery6_description= $validatedData['flora_page4_gallery6_description'];

        if ($request->hasFile('flora_page4_gallery6_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('flora_page4_gallery6_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/flora/flora_page4/gallery6', $filename);
            $flora_page4_gallery6->flora_page4_gallery6_image = $filename; // Replace X with 1, 2, 3, or 4
            $flora_page4_gallery6->save();
            return redirect('admin/story/flora/flora_page4/flora_page4')->with('message', 'Flora Page4 Gallery6 edited successfully');
        }
    }
}
