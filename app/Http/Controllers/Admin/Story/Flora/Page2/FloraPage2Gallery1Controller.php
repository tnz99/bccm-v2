<?php

namespace App\Http\Controllers\Admin\Story\Flora\Page2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Flora\Page2\Gallery1;
use App\Http\Requests\Story\Flora\Page2\Gallery1FormRequest;

class FloraPage2Gallery1Controller extends Controller
{
    public function flora_page2_gallery1_create(){
        return view('admin.story.flora.flora_page2.gallery1.gallery1');

    }

    public function store(Gallery1FormRequest $request){
        $validatedData = $request->validated();

        $flora_page2_gallery1 = new Gallery1;
        $flora_page2_gallery1->flora_page2_gallery1_title= $validatedData['flora_page2_gallery1_title'];
        $flora_page2_gallery1->flora_page2_gallery1_subtitle= $validatedData['flora_page2_gallery1_subtitle'];
        $flora_page2_gallery1->flora_page2_gallery1_description= $validatedData['flora_page2_gallery1_description'];

        if ($request->hasFile('flora_page2_gallery1_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('flora_page2_gallery1_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/flora/flora_page2/gallery1', $filename);
            $flora_page2_gallery1->flora_page2_gallery1_image = $filename; // Replace X with 1, 2, 3, or 4
            $flora_page2_gallery1->save();
            return redirect('admin/story/flora/flora_page2/flora_page2')->with('message', 'Flora Page2 Gallery 1 edited successfully');
        }
    }
}
