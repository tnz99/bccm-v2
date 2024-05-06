<?php

namespace App\Http\Controllers\Admin\Story\Flora\Page3;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Flora\Page3\Gallery1;
use App\Http\Requests\Story\Flora\Page3\Gallery1FormRequest;

class FloraPage3Gallery1Controller extends Controller
{
    public function flora_page3_gallery1_create(){
        return view('admin.story.flora.flora_page3.gallery1.gallery1');

    }

    public function store(Gallery1FormRequest $request){
        $validatedData = $request->validated();

        $flora_page3_gallery1 = new Gallery1;
        $flora_page3_gallery1->flora_page3_gallery1_title= $validatedData['flora_page3_gallery1_title'];
        $flora_page3_gallery1->flora_page3_gallery1_subtitle= $validatedData['flora_page3_gallery1_subtitle'];
        $flora_page3_gallery1->flora_page3_gallery1_description= $validatedData['flora_page3_gallery1_description'];

        if ($request->hasFile('flora_page3_gallery1_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('flora_page3_gallery1_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/flora/flora_page3/gallery1', $filename);
            $flora_page3_gallery1->flora_page3_gallery1_image = $filename; // Replace X with 1, 2, 3, or 4
            $flora_page3_gallery1->save();
            return redirect('admin/story/flora/flora_page3/flora_page3')->with('message', 'Flora Page3 Gallery1 edited successfully');
        }
    }
}
