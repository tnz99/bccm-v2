<?php

namespace App\Http\Controllers\Admin\Story\Fauna\Page7;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Fauna\Page7\Gallery10;
use App\Http\Requests\Story\Fauna\Page7\Gallery10FormRequest;

class FaunaPage7Gallery10Controller extends Controller
{
    public function fauna_page7_gallery10_create(){
        return view('admin.story.fauna.fauna_page7.gallery10.gallery10');
    }
    public function store(Gallery10FormRequest $request){
        $validatedData = $request->validated();

        $fauna_page7_gallery10 = new Gallery10;
        $fauna_page7_gallery10->fauna_page7_gallery10_title= $validatedData['fauna_page7_gallery10_title'];
        $fauna_page7_gallery10->fauna_page7_gallery10_subtitle= $validatedData['fauna_page7_gallery10_subtitle'];
        $fauna_page7_gallery10->fauna_page7_gallery10_description= $validatedData['fauna_page7_gallery10_description'];

        if ($request->hasFile('fauna_page7_gallery10_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('fauna_page7_gallery10_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/fauna/fauna_page7/gallery10', $filename);
            $fauna_page7_gallery10->fauna_page7_gallery10_image = $filename; // Replace X with 1, 2, 3, or 4
            $fauna_page7_gallery10->save();
            return redirect('admin/story/fauna/fauna_page7/fauna_page7')->with('message', 'Fauna Page 7 Gallery 10 edited successfully');
        }
    }
}
