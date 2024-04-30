<?php

namespace App\Http\Controllers\Admin\Story\Kingdom\Gallery\Galleries;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Kingdom\Gallery\Galleries\Galleries3;
use App\Http\Requests\Story\Kingdom\Gallery\Galleries\Galleries3FormRequest;

class Galleries3Controller extends Controller
{
    public function galleries2_create(){
        return view('admin.story.kingdom.gallery.galleries.gallery3.galleries2');
    }

    public function store(Galleries3FormRequest $request){
        $validatedData = $request->validated();

        $gallery3 = new Galleries3;
        $gallery3->kingdom_galleries2_title= $validatedData['kingdom_galleries2_title'];
        $gallery3->kingdom_galleries2_subtitle= $validatedData['kingdom_galleries2_subtitle'];
        $gallery3->kingdom_galleries2_description= $validatedData['kingdom_galleries2_description'];

        if ($request->hasFile('kingdom_galleries2_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('kingdom_galleries2_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/kingdom\gallery/galleries/', $filename);
            $gallery3->kingdom_galleries2_image = $filename; // Replace X with 1, 2, 3, or 4
            $gallery3->save();
            return redirect('admin/story/kingdom/gallery/gallery')->with('message', 'Gallery page edited successfully');
        }
    }
}
