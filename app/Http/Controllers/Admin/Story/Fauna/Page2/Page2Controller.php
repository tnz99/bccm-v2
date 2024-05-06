<?php

namespace App\Http\Controllers\Admin\Story\Fauna\Page2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Fauna\Page2\Gallery;
use App\Http\Requests\Story\Fauna\Page2\Page2FormRequest;

class Page2Controller extends Controller
{
    public function fauna_page2_create(){
        return view('admin.story.fauna.fauna_page2.fauna_page2');
    }

    public function store(Page2FormRequest $request){
        $validatedData = $request->validated();

        $fauna_page2 = new Gallery;
        $fauna_page2->fauna_page2_title= $validatedData['fauna_page2_title'];
        $fauna_page2->fauna_page2_description= $validatedData['fauna_page2_description'];

        if ($request->hasFile('fauna_page2_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('fauna_page2_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/fauna/fauna_page2/', $filename);
            $fauna_page2->fauna_page2_image = $filename; // Replace X with 1, 2, 3, or 4
            $fauna_page2->save();
            return redirect('admin/story/fauna/fauna_page')->with('message', 'Fauna Page 2 edited successfully');
        }
    }
}
