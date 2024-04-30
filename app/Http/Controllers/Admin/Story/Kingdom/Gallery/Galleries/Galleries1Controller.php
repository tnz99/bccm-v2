<?php

namespace App\Http\Controllers\Admin\Story\Kingdom\Gallery\Galleries;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Kingdom\Gallery\Galleries\Galleries1;
use App\Http\Requests\Story\Kingdom\Gallery\Galleries\Galleries1FormRequest;

class Galleries1Controller extends Controller
{
    public function galleries0_create(){
        return view('admin.story.kingdom.gallery.galleries.gallery1.galleries0');
    }

    public function store(Galleries1FormRequest $request){
        $validatedData = $request->validated();

        $gallery1 = new Galleries1;
        $gallery1->kingdom_galleries0_title= $validatedData['kingdom_galleries0_title'];
        $gallery1->kingdom_galleries0_subtitle= $validatedData['kingdom_galleries0_subtitle'];
        $gallery1->kingdom_galleries0_description= $validatedData['kingdom_galleries0_description'];

        if ($request->hasFile('kingdom_galleries0_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('kingdom_galleries0_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/kingdom\gallery/galleries/', $filename);
            $gallery1->kingdom_galleries0_image = $filename; // Replace X with 1, 2, 3, or 4
            $gallery1->save();
            return redirect('admin/story/kingdom/gallery/gallery')->with('message', 'Gallery page edited successfully');
        }
    }
}
