<?php

namespace App\Http\Controllers\Admin\Story\Fauna\Page5;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Fauna\Page5\Gallery1;
use App\Http\Requests\Story\Fauna\Page5\Gallery1FormRequest;

class FaunaPage5Gallery1Controller extends Controller
{
    public function fauna_page5_gallery1_create(){
        return view('admin.story.fauna.fauna_page5.gallery1.gallery1');

    }

    public function store(Gallery1FormRequest $request){
        $validatedData = $request->validated();

        $fauna_page5_gallery1 = new Gallery1;
        $fauna_page5_gallery1->fauna_page5_gallery1_title= $validatedData['fauna_page5_gallery1_title'];
        $fauna_page5_gallery1->fauna_page5_gallery1_subtitle= $validatedData['fauna_page5_gallery1_subtitle'];
        $fauna_page5_gallery1->fauna_page5_gallery1_description= $validatedData['fauna_page5_gallery1_description'];

        if ($request->hasFile('fauna_page5_gallery1_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('fauna_page5_gallery1_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/fauna/fauna_page5/gallery1', $filename);
            $fauna_page5_gallery1->fauna_page5_gallery1_image = $filename; // Replace X with 1, 2, 3, or 4
            $fauna_page5_gallery1->save();
            return redirect('admin/story/fauna/fauna_page5/fauna_page5')->with('message', 'Fauna Page 5 Gallery 1 edited successfully');
        }
    }
}
