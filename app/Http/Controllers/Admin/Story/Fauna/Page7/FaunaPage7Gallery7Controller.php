<?php

namespace App\Http\Controllers\Admin\Story\Fauna\Page7;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Fauna\Page7\Gallery7;
use App\Http\Requests\Story\Fauna\Page7\Gallery7FormRequest;

class FaunaPage7Gallery7Controller extends Controller
{
    public function fauna_page7_gallery7_create(){
        return view('admin.story.fauna.fauna_page7.gallery7.gallery7');

    }

    public function store(Gallery7FormRequest $request){
        $validatedData = $request->validated();

        $fauna_page7_gallery7 = new Gallery7;
        $fauna_page7_gallery7->fauna_page7_gallery7_title= $validatedData['fauna_page7_gallery7_title'];
        $fauna_page7_gallery7->fauna_page7_gallery7_subtitle= $validatedData['fauna_page7_gallery7_subtitle'];
        $fauna_page7_gallery7->fauna_page7_gallery7_description= $validatedData['fauna_page7_gallery7_description'];

        if ($request->hasFile('fauna_page7_gallery7_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('fauna_page7_gallery7_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/fauna/fauna_page7/gallery7', $filename);
            $fauna_page7_gallery7->fauna_page7_gallery7_image = $filename; // Replace X with 1, 2, 3, or 4
            $fauna_page7_gallery7->save();
            return redirect('admin/story/fauna/fauna_page7/fauna_page7')->with('message', 'Fauna Page 7 Gallery 7 edited successfully');
        }
    }
}
