<?php

namespace App\Http\Controllers\Admin\Story\Fauna\Page5;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Fauna\Page5\Gallery5;
use App\Http\Requests\Story\Fauna\Page5\Gallery5FormRequest;

class FaunaPage5Gallery5Controller extends Controller
{
    public function fauna_page5_gallery5_create(){
        return view('admin.story.fauna.fauna_page5.gallery5.gallery5');

    }

    public function store(Gallery5FormRequest $request){
        $validatedData = $request->validated();

        $fauna_page5_gallery5 = new Gallery5;
        $fauna_page5_gallery5->fauna_page5_gallery5_title= $validatedData['fauna_page5_gallery5_title'];
        $fauna_page5_gallery5->fauna_page5_gallery5_subtitle= $validatedData['fauna_page5_gallery5_subtitle'];
        $fauna_page5_gallery5->fauna_page5_gallery5_description= $validatedData['fauna_page5_gallery5_description'];

        if ($request->hasFile('fauna_page5_gallery5_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('fauna_page5_gallery5_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/fauna/fauna_page5/gallery5', $filename);
            $fauna_page5_gallery5->fauna_page5_gallery5_image = $filename; // Replace X with 1, 2, 3, or 4
            $fauna_page5_gallery5->save();
            return redirect('admin/story/fauna/fauna_page5/fauna_page5')->with('message', 'Fauna Page 5 Gallery 5 edited successfully');
        }
    }
}
