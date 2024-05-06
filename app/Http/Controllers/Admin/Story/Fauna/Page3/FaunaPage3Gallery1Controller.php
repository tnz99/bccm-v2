<?php

namespace App\Http\Controllers\Admin\Story\Fauna\Page3;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Fauna\Page3\Gallery1;
use App\Http\Requests\Story\Fauna\Page3\Gallery1FormRequest;

class FaunaPage3Gallery1Controller extends Controller
{
    public function fauna_page3_gallery1_create(){
        return view('admin.story.fauna.fauna_page3.gallery1.gallery1');

    }

    public function store(Gallery1FormRequest $request){
        $validatedData = $request->validated();

        $fauna_page3_gallery1 = new Gallery1;
        $fauna_page3_gallery1->fauna_page3_gallery1_title= $validatedData['fauna_page3_gallery1_title'];
        $fauna_page3_gallery1->fauna_page3_gallery1_subtitle= $validatedData['fauna_page3_gallery1_subtitle'];
        $fauna_page3_gallery1->fauna_page3_gallery1_description= $validatedData['fauna_page3_gallery1_description'];

        if ($request->hasFile('fauna_page3_gallery1_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('fauna_page3_gallery1_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/fauna/fauna_page3/gallery1', $filename);
            $fauna_page3_gallery1->fauna_page3_gallery1_image = $filename; // Replace X with 1, 2, 3, or 4
            $fauna_page3_gallery1->save();
            return redirect('admin/story/fauna/fauna_page3/fauna_page3')->with('message', 'Fauna Page 3 Gallery 1 edited successfully');
        }
    }
}
