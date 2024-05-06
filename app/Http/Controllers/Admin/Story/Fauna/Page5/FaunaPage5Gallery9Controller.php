<?php

namespace App\Http\Controllers\Admin\Story\Fauna\Page5;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Fauna\Page5\Gallery9;
use App\Http\Requests\Story\Fauna\Page5\Gallery9FormRequest;

class FaunaPage5Gallery9Controller extends Controller
{
    public function fauna_page5_gallery9_create(){
        return view('admin.story.fauna.fauna_page5.gallery9.gallery9');

    }

    public function store(Gallery9FormRequest $request){
        $validatedData = $request->validated();

        $fauna_page5_gallery9 = new Gallery9;
        $fauna_page5_gallery9->fauna_page5_gallery9_title= $validatedData['fauna_page5_gallery9_title'];
        $fauna_page5_gallery9->fauna_page5_gallery9_subtitle= $validatedData['fauna_page5_gallery9_subtitle'];
        $fauna_page5_gallery9->fauna_page5_gallery9_description= $validatedData['fauna_page5_gallery9_description'];

        if ($request->hasFile('fauna_page5_gallery9_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('fauna_page5_gallery9_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/fauna/fauna_page5/gallery9', $filename);
            $fauna_page5_gallery9->fauna_page5_gallery9_image = $filename; // Replace X with 1, 2, 3, or 4
            $fauna_page5_gallery9->save();
            return redirect('admin/story/fauna/fauna_page5/fauna_page5')->with('message', 'Fauna Page 5 Gallery 9 edited successfully');
        }
    }
}
