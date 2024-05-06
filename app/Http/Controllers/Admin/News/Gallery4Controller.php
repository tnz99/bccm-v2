<?php

namespace App\Http\Controllers\Admin\News;

use Illuminate\Http\Request;
use App\Models\Gallery\Gallery4;
use App\Http\Controllers\Controller;
use App\Http\Requests\Gallery\Gallery4FormRequest;


class Gallery4Controller extends Controller
{
    public function gallery4_create(){
        return view('admin.news_and_events.gallery.galleries/gallery4/gallery4');
    }
    public function store(Gallery4FormRequest $request){
        $validatedData = $request->validated();

        $gallery4 = new Gallery4;
        $gallery4->gallery4_title= $validatedData['gallery4_title'];
        $gallery4->gallery4_description= $validatedData['gallery4_description'];

        if($request->hasFile('gallery4_image')){
            $file = $request->file('gallery4_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/news_and_events/gallery/galleries/gallery4/',$filename);
            $gallery4->gallery4_image = $filename;
            $gallery4->save();

            return redirect('admin/news_and_events/gallery/gallery')->with('message', 'Gallery5 page edited successfully');
        }
    }
}
