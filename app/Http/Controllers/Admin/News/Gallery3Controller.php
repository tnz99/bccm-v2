<?php

namespace App\Http\Controllers\Admin\News;

use Illuminate\Http\Request;
use App\Models\Gallery\Gallery3;
use App\Http\Controllers\Controller;
use App\Http\Requests\Gallery\Gallery3FormRequest;

class Gallery3Controller extends Controller
{
    public function gallery3_create(){
        return view('admin.news_and_events.gallery.galleries/gallery3/gallery3');
    }
    public function store(Gallery3FormRequest $request){
        $validatedData = $request->validated();

        $gallery3 = new Gallery3;
        $gallery3->gallery3_title= $validatedData['gallery3_title'];
        $gallery3->gallery3_description= $validatedData['gallery3_description'];

        if($request->hasFile('gallery3_image')){
            $file = $request->file('gallery3_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/news_and_events/gallery/galleries/gallery3/',$filename);
            $gallery3->gallery3_image = $filename;
            $gallery3->save();

            return redirect('admin/news_and_events/gallery/gallery')->with('message', 'Gallery4 page edited successfully');
        }
    }
}
