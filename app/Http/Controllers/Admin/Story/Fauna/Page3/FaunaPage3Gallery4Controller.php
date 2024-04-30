<?php

namespace App\Http\Controllers\Admin\Story\Fauna\Page3;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Fauna\Page3\Gallery4;
use App\Http\Requests\Story\Fauna\Page3\Gallery4FormRequest;

class FaunaPage3Gallery4Controller extends Controller
{
    public function fauna_page3_gallery4_create(){
        return view('admin.story.fauna.fauna_page3.gallery4.gallery4');

    }

    public function store(Gallery4FormRequest $request){
        $validatedData = $request->validated();

        $fauna_page3_gallery4 = new Gallery4;
        $fauna_page3_gallery4->fauna_page3_gallery4_title= $validatedData['fauna_page3_gallery4_title'];
        $fauna_page3_gallery4->fauna_page3_gallery4_subtitle= $validatedData['fauna_page3_gallery4_subtitle'];
        $fauna_page3_gallery4->fauna_page3_gallery4_description= $validatedData['fauna_page3_gallery4_description'];

        if ($request->hasFile('fauna_page3_gallery4_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('fauna_page3_gallery4_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/fauna/fauna_page3/gallery4', $filename);
            $fauna_page3_gallery4->fauna_page3_gallery4_image = $filename; // Replace X with 1, 2, 3, or 4
            $fauna_page3_gallery4->save();
            return redirect('admin/story/fauna/fauna_page3/fauna_page3')->with('message', 'Fauna Page 3 Gallery 4 edited successfully');
        }
    }
}
