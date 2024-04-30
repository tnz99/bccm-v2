<?php

namespace App\Http\Controllers\Admin\Story\Kingdom\Gallery\Galleries;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Kingdom\Gallery\Galleries\Galleries8;
use App\Http\Requests\Story\Kingdom\Gallery\Galleries\Galleries8FormRequest;

class Galleries8Controller extends Controller
{
    public function galleries7_create(){
        return view('admin.story.kingdom.gallery.galleries.gallery8.galleries7');
    }
    public function store(Galleries8FormRequest $request){
        $validatedData = $request->validated();

        $gallery8 = new Galleries8;
        $gallery8->kingdom_galleries7_title= $validatedData['kingdom_galleries7_title'];
        $gallery8->kingdom_galleries7_subtitle= $validatedData['kingdom_galleries7_subtitle'];
        $gallery8->kingdom_galleries7_description= $validatedData['kingdom_galleries7_description'];
        if ($request->hasFile('kingdom_galleries7_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('kingdom_galleries7_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/kingdom\gallery/galleries/', $filename);
            $gallery8->kingdom_galleries7_image = $filename; // Replace X with 1, 2, 3, or 4
            $gallery8->save();
            return redirect('admin/story/kingdom/gallery/gallery')->with('message', 'Gallery page edited successfully');
        }
    }

}
