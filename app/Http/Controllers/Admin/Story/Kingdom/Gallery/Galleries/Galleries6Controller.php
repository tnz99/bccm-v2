<?php

namespace App\Http\Controllers\Admin\Story\Kingdom\Gallery\Galleries;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Kingdom\Gallery\Galleries\Galleries6;
use App\Http\Requests\Story\Kingdom\Gallery\Galleries\Galleries6FormRequest;

class Galleries6Controller extends Controller
{
    public function galleries5_create(){
        return view('admin.story.kingdom.gallery.galleries.gallery6.galleries5');
    }
    public function store(Galleries6FormRequest $request){
        $validatedData = $request->validated();

        $gallery6 = new Galleries6;
        $gallery6->kingdom_galleries5_title= $validatedData['kingdom_galleries5_title'];
        $gallery6->kingdom_galleries5_subtitle= $validatedData['kingdom_galleries5_subtitle'];
        $gallery6->kingdom_galleries5_description= $validatedData['kingdom_galleries5_description'];

        if ($request->hasFile('kingdom_galleries5_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('kingdom_galleries5_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/kingdom\gallery/galleries/', $filename);
            $gallery6->kingdom_galleries5_image = $filename; // Replace X with 1, 2, 3, or 4
            $gallery6->save();
            return redirect('admin/story/kingdom/gallery/gallery')->with('message', 'Gallery page edited successfully');
        }
    }
}
