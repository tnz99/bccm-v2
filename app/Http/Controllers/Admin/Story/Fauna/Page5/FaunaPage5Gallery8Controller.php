<?php

namespace App\Http\Controllers\Admin\Story\Fauna\Page5;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Fauna\Page5\Gallery8;
use App\Http\Requests\Story\Fauna\Page5\Gallery8FormRequest;

class FaunaPage5Gallery8Controller extends Controller
{
    public function fauna_page5_gallery8_create(){
        return view('admin.story.fauna.fauna_page5.gallery8.gallery8');

    }

    public function store(Gallery8FormRequest $request){
        $validatedData = $request->validated();

        $fauna_page5_gallery8 = new Gallery8;
        $fauna_page5_gallery8->fauna_page5_gallery8_title= $validatedData['fauna_page5_gallery8_title'];
        $fauna_page5_gallery8->fauna_page5_gallery8_subtitle= $validatedData['fauna_page5_gallery8_subtitle'];
        $fauna_page5_gallery8->fauna_page5_gallery8_description= $validatedData['fauna_page5_gallery8_description'];

        if ($request->hasFile('fauna_page5_gallery8_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('fauna_page5_gallery8_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/fauna/fauna_page5/gallery8', $filename);
            $fauna_page5_gallery8->fauna_page5_gallery8_image = $filename; // Replace X with 1, 2, 3, or 4
            $fauna_page5_gallery8->save();
            return redirect('admin/story/fauna/fauna_page5/fauna_page5')->with('message', 'Fauna Page 5 Gallery 8 edited successfully');
        }
    }
}
