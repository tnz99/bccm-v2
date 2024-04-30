<?php

namespace App\Http\Controllers\Admin\Story\Fauna\Page4;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Fauna\Page4\Gallery;
use App\Http\Requests\Story\Fauna\Page4\Page4FormRequest;

class Page4Controller extends Controller
{
    public function fauna_page4_create(){
        return view('admin.story.fauna.fauna_page4.fauna_page4');
    }

    public function store(Page4FormRequest $request){
        $validatedData = $request->validated();

        $fauna_page4 = new Gallery;
        $fauna_page4->fauna_page4_title= $validatedData['fauna_page4_title'];
        $fauna_page4->fauna_page4_description= $validatedData['fauna_page4_description'];

        if ($request->hasFile('fauna_page4_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('fauna_page4_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/fauna/fauna_page4/', $filename);
            $fauna_page4->fauna_page4_image = $filename; // Replace X with 1, 2, 3, or 4
            $fauna_page4->save();
            return redirect('admin/story/fauna/fauna_page')->with('message', 'Fauna Page 4 edited successfully');
        }
    }
}
