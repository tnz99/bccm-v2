<?php

namespace App\Http\Controllers\Admin\Story\Fauna\Page7;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Fauna\Page7\Gallery8;
use App\Http\Requests\Story\Fauna\Page7\Gallery8FormRequest;

class FaunaPage7Gallery8Controller extends Controller
{
    public function fauna_page7_gallery8_create(){
        return view('admin.story.fauna.fauna_page7.gallery8.gallery8');

    }

    public function store(Gallery8FormRequest $request){
        $validatedData = $request->validated();

        $fauna_page7_gallery8 = new Gallery8;
        $fauna_page7_gallery8->fauna_page7_gallery8_title= $validatedData['fauna_page7_gallery8_title'];
        $fauna_page7_gallery8->fauna_page7_gallery8_subtitle= $validatedData['fauna_page7_gallery8_subtitle'];
        $fauna_page7_gallery8->fauna_page7_gallery8_description= $validatedData['fauna_page7_gallery8_description'];

        if ($request->hasFile('fauna_page7_gallery8_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('fauna_page7_gallery8_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/fauna/fauna_page7/gallery8', $filename);
            $fauna_page7_gallery8->fauna_page7_gallery8_image = $filename; // Replace X with 1, 2, 3, or 4
            $fauna_page7_gallery8->save();
            return redirect('admin/story/fauna/fauna_page7/fauna_page7')->with('message', 'Fauna Page 7 Gallery 8 edited successfully');
        }
    }
}
