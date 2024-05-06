<?php

namespace App\Http\Controllers\Admin\News;

use Illuminate\Http\Request;
use App\Models\NewsAndEvents;
use App\Http\Controllers\Controller;
use App\Http\Requests\EditNewsAndEventsFormRequest;

class NewsAndEventsController extends Controller
{
    // public function index()
    // {
    //     return view('admin.edit_home');
    // }
    public function news_and_events_create(){
        return view('admin.news_and_events.news_and_events');
    }
    public function store(EditNewsAndEventsFormRequest $request){
        $validatedData = $request->validated();

        $news_and_events = new NewsAndEvents;
        $news_and_events->news_title= $validatedData['news_title'];
        $news_and_events->news_description= $validatedData['news_description'];

        if($request->hasFile('news_image')){
            $file = $request->file('news_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/news_and_events/',$filename);
            $news_and_events->news_image = $filename;
            $news_and_events->save();

            return redirect('admin/news_and_events/gallery/gallery')->with('message', 'Gallery1 page edited successfully');
        }
    }
}
