<?php

namespace App\Http\Controllers\Admin\Story\Flora\Page2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Flora\Page2\Gallery;
use App\Http\Requests\Story\Flora\Page2\FloraGalleryFormRequest;

class FloraPage2Controller extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = Gallery::query();

        // If there's a search query, filter the stories based on the title
        if (!empty($search)) {
            $query->where('flora_page2_gallery_title', 'LIKE', "%$search%");
        }

        $flora_page2 = $query->get();

        // Check if there are no stories found
        if ($flora_page2->isEmpty() && !empty($search)) {
            $searchMessage = "No flora_page2 found matching '$search'";
        } else {
            $searchMessage = "";
        }

        return view('admin.story.flora.flora_page2.flora_page2', compact('flora_page2', 'search', 'searchMessage'));
    }

    public function store(FloraGalleryFormRequest $request){
        $validatedData = $request->validated();

        $flora_page2 = new Gallery;
        $existingPage = Gallery::where('flora_page2_gallery_title', $validatedData['flora_page2_gallery_title'])->first();

        if ($existingPage) {
            return redirect()->back()->withInput()->with('error', 'A flora page2 gallery with this title already exists.');
        }

        $flora_page2->flora_page2_gallery_title= $validatedData['flora_page2_gallery_title'];
        $flora_page2->save();

        return redirect('admin/story/flora/flora_page2/flora_page2')->with('message', 'New page added successfully');

    }

    public function destroy($flora_page2_gallery_id)
    {
        $flora_page2 = Gallery::findOrFail($flora_page2_gallery_id);
        $flora_page2->delete();
        return redirect('admin/story/flora/flora_page2/flora_page2')->with('status', 'Your Data is Deleted');

    }
}
