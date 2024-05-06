<?php

namespace App\Http\Controllers\Admin\Story\Fauna\Page5;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Fauna\Page5\Gallery11;
use App\Http\Requests\Story\Fauna\Page5\Gallery11FormRequest;

class FaunaPage5Gallery11Controller extends Controller
{
    public function fauna_page5_gallery11_create(){
        return view('admin.story.fauna.fauna_page5.gallery11.gallery11');

    }

    public function store(Gallery11FormRequest $request){
        $validatedData = $request->validated();

        $fauna_page5_gallery11 = new Gallery11;
        $fauna_page5_gallery11->fauna_page5_gallery11_title= $validatedData['fauna_page5_gallery11_title'];
        $fauna_page5_gallery11->fauna_page5_gallery11_subtitle= $validatedData['fauna_page5_gallery11_subtitle'];
        $fauna_page5_gallery11->fauna_page5_gallery11_description= $validatedData['fauna_page5_gallery11_description'];

        if ($request->hasFile('fauna_page5_gallery11_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('fauna_page5_gallery11_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/fauna/fauna_page5/gallery11', $filename);
            $fauna_page5_gallery11->fauna_page5_gallery11_image = $filename; // Replace X with 1, 2, 3, or 4
            $fauna_page5_gallery11->save();
            return redirect('admin/story/fauna/fauna_page5/fauna_page5')->with('message', 'Fauna Page 5 Gallery 11 edited successfully');
        }
    }
}
