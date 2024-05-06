<?php

namespace App\Http\Controllers\Admin\Story\Fauna\Page5;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Fauna\Page5\Gallery4;
use App\Http\Requests\Story\Fauna\Page5\Gallery4FormRequest;

class FaunaPage5Gallery4Controller extends Controller
{
    public function fauna_page5_gallery4_create(){
        return view('admin.story.fauna.fauna_page5.gallery4.gallery4');

    }

    public function store(Gallery4FormRequest $request){
        $validatedData = $request->validated();

        $fauna_page5_gallery4 = new Gallery4;
        $fauna_page5_gallery4->fauna_page5_gallery4_title= $validatedData['fauna_page5_gallery4_title'];
        $fauna_page5_gallery4->fauna_page5_gallery4_subtitle= $validatedData['fauna_page5_gallery4_subtitle'];
        $fauna_page5_gallery4->fauna_page5_gallery4_description= $validatedData['fauna_page5_gallery4_description'];

        if ($request->hasFile('fauna_page5_gallery4_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('fauna_page5_gallery4_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/fauna/fauna_page5/gallery4', $filename);
            $fauna_page5_gallery4->fauna_page5_gallery4_image = $filename; // Replace X with 1, 2, 3, or 4
            $fauna_page5_gallery4->save();
            return redirect('admin/story/fauna/fauna_page5/fauna_page5')->with('message', 'Fauna Page 5 Gallery 4 edited successfully');
        }
    }
}
