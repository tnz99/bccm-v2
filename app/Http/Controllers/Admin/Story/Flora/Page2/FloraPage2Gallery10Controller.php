<?php

namespace App\Http\Controllers\Admin\Story\Flora\Page2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Flora\Page2\Gallery10;
use App\Http\Requests\Story\Flora\Page2\Gallery10FormRequest;

class FloraPage2Gallery10Controller extends Controller
{
    public function flora_page2_gallery10_create(){
        return view('admin.story.flora.flora_page2.gallery10.gallery10');

    }

    public function store(Gallery10FormRequest $request){
        $validatedData = $request->validated();

        $flora_page2_gallery10 = new Gallery10;
        $flora_page2_gallery10->flora_page2_gallery10_title= $validatedData['flora_page2_gallery10_title'];
        $flora_page2_gallery10->flora_page2_gallery10_subtitle= $validatedData['flora_page2_gallery10_subtitle'];
        $flora_page2_gallery10->flora_page2_gallery10_description= $validatedData['flora_page2_gallery10_description'];

        if ($request->hasFile('flora_page2_gallery10_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('flora_page2_gallery10_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/flora/flora_page2/gallery10', $filename);
            $flora_page2_gallery10->flora_page2_gallery10_image = $filename; // Replace X with 1, 2, 3, or 4
            $flora_page2_gallery10->save();
            return redirect('admin/story/flora/flora_page2/flora_page2')->with('message', 'Flora Page2 Gallery 10 edited successfully');
        }
    }
}
