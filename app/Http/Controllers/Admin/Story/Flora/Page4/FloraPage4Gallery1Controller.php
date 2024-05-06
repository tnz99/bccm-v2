<?php

namespace App\Http\Controllers\Admin\Story\Flora\Page4;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Flora\Page4\Gallery1;
use App\Http\Requests\Story\Flora\Page4\Gallery1FormRequest;

class FloraPage4Gallery1Controller extends Controller
{
    public function flora_page4_gallery1_create(){
        return view('admin.story.flora.flora_page4.gallery1.gallery1');

    }

    public function store(Gallery1FormRequest $request){
        $validatedData = $request->validated();

        $flora_page4_gallery1 = new Gallery1;
        $flora_page4_gallery1->flora_page4_gallery1_title= $validatedData['flora_page4_gallery1_title'];
        $flora_page4_gallery1->flora_page4_gallery1_subtitle= $validatedData['flora_page4_gallery1_subtitle'];
        $flora_page4_gallery1->flora_page4_gallery1_description= $validatedData['flora_page4_gallery1_description'];

        if ($request->hasFile('flora_page4_gallery1_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('flora_page4_gallery1_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/flora/flora_page4/gallery1', $filename);
            $flora_page4_gallery1->flora_page4_gallery1_image = $filename; // Replace X with 1, 2, 3, or 4
            $flora_page4_gallery1->save();
            return redirect('admin/story/flora/flora_page4/flora_page4')->with('message', 'Flora Page4 Gallery1 edited successfully');
        }
    }
}
