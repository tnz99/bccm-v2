<?php

namespace App\Http\Controllers\Admin;

// use App\Models\Gallery;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\GalleryFormRequest;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::all();
        return view('admin.news_and_events.gallery.gallery')
            ->with('gallery',$gallery)
        ;
    }

    public function store(GalleryFormRequest $request){
        $validatedData = $request->validated();

        $gallery = new Gallery;
        $gallery->gallary_title= $validatedData['gallary_title'];
        $gallery->save();

        return redirect('admin/news_and_events/gallery/gallery')->with('message', 'New gallery added successfully');

    }

    public function destroy($gallery_id)
    {
        $gallery = Gallery::findOrFail($gallery_id);
        $gallery->delete();
        return redirect('admin/news_and_events/gallery/gallery')->with('status', 'Your Data is Deleted');

    }
}

