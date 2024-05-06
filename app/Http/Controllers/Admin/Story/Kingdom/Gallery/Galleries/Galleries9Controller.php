<?php

namespace App\Http\Controllers\Admin\Story\Kingdom\Gallery\Galleries;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Kingdom\Gallery\Galleries\Galleries9;
use App\Http\Requests\Story\Kingdom\Gallery\Galleries\Galleries9FormRequest;

class Galleries9Controller extends Controller
{
    public function galleries8_create(){
        return view('admin.story.kingdom.gallery.galleries.gallery9.galleries8');
    }

    public function store(Galleries9FormRequest $request){
        $validatedData = $request->validated();

        $gallery9 = new Galleries9;
        $gallery9->kingdom_galleries8_title= $validatedData['kingdom_galleries8_title'];
        $gallery9->kingdom_galleries8_subtitle= $validatedData['kingdom_galleries8_subtitle'];
        $gallery9->kingdom_galleries8_description= $validatedData['kingdom_galleries8_description'];

        if ($request->hasFile('kingdom_galleries8_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('kingdom_galleries8_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/kingdom\gallery/galleries/', $filename);
            $gallery9->kingdom_galleries8_image = $filename; // Replace X with 1, 2, 3, or 4
            $gallery9->save();
            return redirect('admin/story/kingdom/gallery/gallery')->with('message', 'Gallery page edited successfully');
        }
    }
}
