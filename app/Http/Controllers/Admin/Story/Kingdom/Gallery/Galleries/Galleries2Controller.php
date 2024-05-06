<?php

namespace App\Http\Controllers\Admin\Story\Kingdom\Gallery\Galleries;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Kingdom\Gallery\Galleries\Galleries2;
use App\Http\Requests\Story\Kingdom\Gallery\Galleries\Galleries2FormRequest;

class Galleries2Controller extends Controller
{
    public function galleries1_create(){
        return view('admin.story.kingdom.gallery.galleries.gallery2.galleries1');
    }

    public function store(Galleries2FormRequest $request){
        $validatedData = $request->validated();

        $gallery2 = new Galleries2;
        $gallery2->kingdom_galleries1_title= $validatedData['kingdom_galleries1_title'];
        $gallery2->kingdom_galleries1_subtitle= $validatedData['kingdom_galleries1_subtitle'];
        $gallery2->kingdom_galleries1_description= $validatedData['kingdom_galleries1_description'];

        if ($request->hasFile('kingdom_galleries1_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('kingdom_galleries1_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/kingdom\gallery/galleries/', $filename);
            $gallery2->kingdom_galleries1_image = $filename; // Replace X with 1, 2, 3, or 4
            $gallery2->save();
            return redirect('admin/story/kingdom/gallery/gallery')->with('message', 'Gallery page edited successfully');
        }
    }
}
