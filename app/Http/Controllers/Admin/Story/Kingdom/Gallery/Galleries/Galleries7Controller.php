<?php

namespace App\Http\Controllers\Admin\Story\Kingdom\Gallery\Galleries;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Kingdom\Gallery\Galleries\Galleries7;
use App\Http\Requests\Story\Kingdom\Gallery\Galleries\Galleries7FormRequest;

class Galleries7Controller extends Controller
{
    public function galleries6_create(){
        return view('admin.story.kingdom.gallery.galleries.gallery7.galleries6');
    }
    public function store(Galleries7FormRequest $request){
        $validatedData = $request->validated();

        $gallery7 = new Galleries7;
        $gallery7->kingdom_galleries6_title= $validatedData['kingdom_galleries6_title'];
        $gallery7->kingdom_galleries6_subtitle= $validatedData['kingdom_galleries6_subtitle'];
        $gallery7->kingdom_galleries6_description= $validatedData['kingdom_galleries6_description'];
        if ($request->hasFile('kingdom_galleries6_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('kingdom_galleries6_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/kingdom\gallery/galleries/', $filename);
            $gallery7->kingdom_galleries6_image = $filename; // Replace X with 1, 2, 3, or 4
            $gallery7->save();
            return redirect('admin/story/kingdom/gallery/gallery')->with('message', 'Gallery page edited successfully');
        }
    }

}
