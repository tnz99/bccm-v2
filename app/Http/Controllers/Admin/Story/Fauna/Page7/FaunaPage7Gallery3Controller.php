<?php

namespace App\Http\Controllers\Admin\Story\Fauna\Page7;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Fauna\Page7\Gallery3;
use App\Http\Requests\Story\Fauna\Page7\Gallery3FormRequest;

class FaunaPage7Gallery3Controller extends Controller
{
    public function fauna_page7_gallery3_create(){
        return view('admin.story.fauna.fauna_page7.gallery3.gallery3');

    }

    public function store(Gallery3FormRequest $request){
        $validatedData = $request->validated();

        $fauna_page7_gallery3 = new Gallery3;
        $fauna_page7_gallery3->fauna_page7_gallery3_title= $validatedData['fauna_page7_gallery3_title'];
        $fauna_page7_gallery3->fauna_page7_gallery3_subtitle= $validatedData['fauna_page7_gallery3_subtitle'];
        $fauna_page7_gallery3->fauna_page7_gallery3_description= $validatedData['fauna_page7_gallery3_description'];

        if ($request->hasFile('fauna_page7_gallery3_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('fauna_page7_gallery3_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/fauna/fauna_page7/gallery3', $filename);
            $fauna_page7_gallery3->fauna_page7_gallery3_image = $filename; // Replace X with 1, 2, 3, or 4
            $fauna_page7_gallery3->save();
            return redirect('admin/story/fauna/fauna_page7/fauna_page7')->with('message', 'Fauna Page 7 Gallery 3 edited successfully');
        }
    }
}
