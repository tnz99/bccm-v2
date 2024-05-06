<?php

namespace App\Http\Controllers\Admin\Story\Fauna\Page7;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Fauna\Page7\Gallery6;
use App\Http\Requests\Story\Fauna\Page7\Gallery6FormRequest;

class FaunaPage7Gallery6Controller extends Controller
{
    public function fauna_page7_gallery6_create(){
        return view('admin.story.fauna.fauna_page7.gallery6.gallery6');

    }

    public function store(Gallery6FormRequest $request){
        $validatedData = $request->validated();

        $fauna_page7_gallery6 = new Gallery6;
        $fauna_page7_gallery6->fauna_page7_gallery6_title= $validatedData['fauna_page7_gallery6_title'];
        $fauna_page7_gallery6->fauna_page7_gallery6_subtitle= $validatedData['fauna_page7_gallery6_subtitle'];
        $fauna_page7_gallery6->fauna_page7_gallery6_description= $validatedData['fauna_page7_gallery6_description'];

        if ($request->hasFile('fauna_page7_gallery6_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('fauna_page7_gallery6_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/fauna/fauna_page7/gallery6', $filename);
            $fauna_page7_gallery6->fauna_page7_gallery6_image = $filename; // Replace X with 1, 2, 3, or 4
            $fauna_page7_gallery6->save();
            return redirect('admin/story/fauna/fauna_page7/fauna_page7')->with('message', 'Fauna Page 7 Gallery 6 edited successfully');
        }
    }
}
