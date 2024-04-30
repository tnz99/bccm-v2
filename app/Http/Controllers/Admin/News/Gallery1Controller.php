<?php

namespace App\Http\Controllers\Admin\News;

use Illuminate\Http\Request;
use App\Models\Gallery\Gallery1;
use App\Http\Controllers\Controller;
use App\Http\Requests\Gallery\Gallery1FormRequest;


class Gallery1Controller extends Controller
{
    public function gallery1_create(){
        return view('admin.news_and_events.gallery.galleries/gallery1/gallery1');
    }
    public function store(Gallery1FormRequest $request){
        $validatedData = $request->validated();

        $gallery1 = new Gallery1;
        $gallery1->gallery1_title= $validatedData['gallery1_title'];
        $gallery1->gallery1_description= $validatedData['gallery1_description'];

        if ($request->hasFile('gallery1_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('gallery1_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/news_and_events/gallery/galleries/gallery1/', $filename);
            $gallery1->gallery1_image = $filename; // Replace X with 1, 2, 3, or 4
            $gallery1->save();
            return redirect('admin/news_and_events/gallery/gallery')->with('message', 'Gallery2 page edited successfully');
        }
    }
}
