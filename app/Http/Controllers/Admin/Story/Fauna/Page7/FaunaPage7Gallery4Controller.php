<?php

namespace App\Http\Controllers\Admin\Story\Fauna\Page7;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Fauna\Page7\Gallery4;
use App\Http\Requests\Story\Fauna\Page7\Gallery4FormRequest;

class FaunaPage7Gallery4Controller extends Controller
{
    public function fauna_page7_gallery4_create(){
        return view('admin.story.fauna.fauna_page7.gallery4.gallery4');
    }

    public function store(Gallery4FormRequest $request){
        $validatedData = $request->validated();

        $fauna_page7_gallery4 = new Gallery4;
        $fauna_page7_gallery4->fauna_page7_gallery4_title= $validatedData['fauna_page7_gallery4_title'];
        $fauna_page7_gallery4->fauna_page7_gallery4_subtitle= $validatedData['fauna_page7_gallery4_subtitle'];
        $fauna_page7_gallery4->fauna_page7_gallery4_description= $validatedData['fauna_page7_gallery4_description'];

        if ($request->hasFile('fauna_page7_gallery4_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('fauna_page7_gallery4_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/fauna/fauna_page7/gallery4', $filename);
            $fauna_page7_gallery4->fauna_page7_gallery4_image = $filename; // Replace X with 1, 2, 3, or 4
            $fauna_page7_gallery4->save();
            return redirect('admin/story/fauna/fauna_page7/fauna_page7')->with('message', 'Fauna Page 7 Gallery 4 edited successfully');
        }
    }
}
