<?php

namespace App\Http\Controllers\Admin\Story\Flora\Page5;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Flora\Page5\Gallery1;
use App\Http\Requests\Story\Flora\Page5\Gallery1FormRequest;

class FloraPage5Gallery1Controller extends Controller
{
    public function flora_page5_gallery1_create(){
        return view('admin.story.flora.flora_page5.gallery1.gallery1');

    }

    public function store(Gallery1FormRequest $request){
        $validatedData = $request->validated();

        $flora_page5_gallery1 = new Gallery1;
        $flora_page5_gallery1->flora_page5_gallery1_title= $validatedData['flora_page5_gallery1_title'];
        $flora_page5_gallery1->flora_page5_gallery1_subtitle= $validatedData['flora_page5_gallery1_subtitle'];
        $flora_page5_gallery1->flora_page5_gallery1_description= $validatedData['flora_page5_gallery1_description'];

        if ($request->hasFile('flora_page5_gallery1_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('flora_page5_gallery1_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/flora/flora_page5/gallery1', $filename);
            $flora_page5_gallery1->flora_page5_gallery1_image = $filename; // Replace X with 1, 2, 3, or 4
            $flora_page5_gallery1->save();
            return redirect('admin/story/flora/flora_page5/flora_page5')->with('message', 'Flora Page5 Gallery1 edited successfully');
        }
    }
}
