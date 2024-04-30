<?php

namespace App\Http\Controllers\Admin\Story\Kingdom\Gallery\Galleries;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Kingdom\Gallery\Galleries\Galleries5;
use App\Http\Requests\Story\Kingdom\Gallery\Galleries\Galleries5FormRequest;

class Galleries5Controller extends Controller
{
    public function galleries4_create(){
        return view('admin.story.kingdom.gallery.galleries.gallery5.galleries4');
    }
    public function store(Galleries5FormRequest $request){
        $validatedData = $request->validated();

        $gallery5 = new Galleries5;
        $gallery5->kingdom_galleries4_title= $validatedData['kingdom_galleries4_title'];
        $gallery5->kingdom_galleries4_subtitle= $validatedData['kingdom_galleries4_subtitle'];
        $gallery5->kingdom_galleries4_description= $validatedData['kingdom_galleries4_description'];
        if ($request->hasFile('kingdom_galleries4_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('kingdom_galleries4_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/kingdom\gallery/galleries/', $filename);
            $gallery5->kingdom_galleries4_image = $filename; // Replace X with 1, 2, 3, or 4
            $gallery5->save();
            return redirect('admin/story/kingdom/gallery/gallery')->with('message', 'Gallery page edited successfully');
        }
    }
}
