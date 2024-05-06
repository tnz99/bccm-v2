<?php

namespace App\Http\Controllers\Admin\Story\Kingdom\Gallery\Galleries;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Kingdom\Gallery\Galleries\Galleries4;
use App\Http\Requests\Story\Kingdom\Gallery\Galleries\Galleries4FormRequest;

class Galleries4Controller extends Controller
{
    public function galleries3_create(){
        return view('admin.story.kingdom.gallery.galleries.gallery4.galleries3');
    }
    public function store(Galleries4FormRequest $request){
        $validatedData = $request->validated();

        $gallery4 = new Galleries4;
        $gallery4->kingdom_galleries3_title= $validatedData['kingdom_galleries3_title'];
        $gallery4->kingdom_galleries3_subtitle= $validatedData['kingdom_galleries3_subtitle'];
        $gallery4->kingdom_galleries3_description= $validatedData['kingdom_galleries3_description'];
        if ($request->hasFile('kingdom_galleries3_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('kingdom_galleries3_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/kingdom\gallery/galleries/', $filename);
            $gallery4->kingdom_galleries3_image = $filename; // Replace X with 1, 2, 3, or 4
            $gallery4->save();
            return redirect('admin/story/kingdom/gallery/gallery')->with('message', 'Gallery page edited successfully');
        }
    }
}
