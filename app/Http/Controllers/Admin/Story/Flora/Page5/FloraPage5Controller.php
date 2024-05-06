<?php

namespace App\Http\Controllers\Admin\Story\Flora\Page5;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Flora\Page5\Gallery;
use App\Http\Requests\Story\Flora\Page5\FloraGalleryFormRequest;

class FloraPage5Controller extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = Gallery::query();

        // If there's a search query, filter the stories based on the title
        if (!empty($search)) {
            $query->where('flora_page5_title', 'LIKE', "%$search%");
        }

        $flora_page5 = $query->get();

        // Check if there are no stories found
        if ($flora_page5->isEmpty() && !empty($search)) {
            $searchMessage = "No flora_page5 found matching '$search'";
        } else {
            $searchMessage = "";
        }

        return view('admin.story.flora.flora_page5.flora_page5', compact('flora_page5', 'search', 'searchMessage'));
    }

    public function store(FloraGalleryFormRequest $request){
        $validatedData = $request->validated();

        $flora_page5 = new Gallery;
        $existingPage = Gallery::where('flora_page5_title', $validatedData['flora_page5_title'])->first();

        if ($existingPage) {
            return redirect()->back()->withInput()->with('error', 'A flora page5 gallery with this title already exists.');
        }
        $flora_page5->flora_page5_title= $validatedData['flora_page5_title'];
        $flora_page5->save();

        return redirect('admin/story/flora/flora_page5/flora_page5')->with('message', 'New page added successfully');

    }

    public function destroy($flora_page5_id)
    {
        $flora_page5 = Gallery::findOrFail($flora_page5_id);
        $flora_page5->delete();
        return redirect('admin/story/flora/flora_page5/flora_page5')->with('status', 'Your Data is Deleted');

    }
}
