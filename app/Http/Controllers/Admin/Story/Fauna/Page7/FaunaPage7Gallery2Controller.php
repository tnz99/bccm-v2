<?php

namespace App\Http\Controllers\Admin\Story\Fauna\Page7;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Fauna\Page7\Gallery2;
use App\Http\Requests\Story\Fauna\Page7\Gallery2FormRequest;

class FaunaPage7Gallery2Controller extends Controller
{
    public function fauna_page7_gallery2_create(){
        return view('admin.story.fauna.fauna_page7.gallery2.gallery2');
    }
    public function store(Gallery2FormRequest $request){
        $validatedData = $request->validated();

        $fauna_page7_gallery2 = new Gallery2;
        $fauna_page7_gallery2->fauna_page7_gallery2_title= $validatedData['fauna_page7_gallery2_title'];
        $fauna_page7_gallery2->fauna_page7_gallery2_subtitle= $validatedData['fauna_page7_gallery2_subtitle'];
        $fauna_page7_gallery2->fauna_page7_gallery2_description= $validatedData['fauna_page7_gallery2_description'];

        if ($request->hasFile('fauna_page7_gallery2_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('fauna_page7_gallery2_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/fauna/fauna_page7/gallery2', $filename);
            $fauna_page7_gallery2->fauna_page7_gallery2_image = $filename; // Replace X with 1, 2, 3, or 4
            $fauna_page7_gallery2->save();
            return redirect('admin/story/fauna/fauna_page7/fauna_page7')->with('message', 'Fauna Page 7 Gallery 2 edited successfully');
        }
    }
}
