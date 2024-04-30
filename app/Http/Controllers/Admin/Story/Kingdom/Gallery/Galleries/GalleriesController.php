<?php

namespace App\Http\Controllers\Admin\Story\Kingdom\Gallery\Galleries;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Kingdom\Gallery\Galleries\Galleries;
use App\Http\Requests\Story\Kingdom\Gallery\Galleries\GalleriesFormRequest;

class GalleriesController extends Controller
{

    public function galleries8_create(){
        return view('admin.story.kingdom.gallery.galleries.galleries8');
    }

    public function store(GalleriesFormRequest $request){
        $validatedData = $request->validated();

        $gallery1 = new Galleries;
        $gallery1->kingdom_galleries8_title= $validatedData['kingdom_galleries8_title'];
        $gallery1->kingdom_galleries8_subtitle= $validatedData['kingdom_galleries8_subtitle'];
        $gallery1->kingdom_galleries8_description= $validatedData['kingdom_galleries8_description'];

    if ($request->hasFile('kingdom_galleries8_image')) { // Replace X with 1, 2, 3, or 4
        $file = $request->file('kingdom_galleries8_image',);
        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move('uploads/story/kingdom\gallery/galleries/', $filename);
        $gallery1->kingdom_galleries8_image = $filename; // Replace X with 1, 2, 3, or 4
        $gallery1->save();
        return redirect('admin/story/kingdom/gallery/gallery')->with('message', 'Gallery page edited successfully');
    }
}
}





