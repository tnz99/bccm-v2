<?php

namespace App\Http\Controllers\Admin\News;

use Illuminate\Http\Request;
use App\Models\Gallery\Gallery2;
use App\Http\Controllers\Controller;
use App\Http\Requests\Gallery\Gallery2FormRequest;

class Gallery2Controller extends Controller
{
    public function gallery2_create(){
        return view('admin.news_and_events.gallery.galleries/gallery2/gallery2');
    }
    public function store(Gallery2FormRequest $request){
        $validatedData = $request->validated();

        $gallery2 = new Gallery2;
        $gallery2->gallery2_title= $validatedData['gallery2_title'];
        $gallery2->gallery2_description= $validatedData['gallery2_description'];

        if($request->hasFile('gallery2_image')){
            $file = $request->file('gallery2_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/news_and_events/gallery/galleries/gallery2/',$filename);
            $gallery2->gallery2_image = $filename;
            $gallery2->save();

            return redirect('admin/news_and_events/gallery/gallery')->with('message', 'Gallery3 page edited successfully');
        }
    }
}
