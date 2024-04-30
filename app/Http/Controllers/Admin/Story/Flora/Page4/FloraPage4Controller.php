<?php

namespace App\Http\Controllers\Admin\Story\Flora\Page4;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Flora\Page4\Gallery;
use App\Http\Requests\Story\Flora\Page4\FloraGalleryFormRequest;

class FloraPage4Controller extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = Gallery::query();

        // If there's a search query, filter the stories based on the title
        if (!empty($search)) {
            $query->where('flora_page4_title', 'LIKE', "%$search%");
        }

        $flora_page4 = $query->get();

        // Check if there are no stories found
        if ($flora_page4->isEmpty() && !empty($search)) {
            $searchMessage = "No flora_page4 found matching '$search'";
        } else {
            $searchMessage = "";
        }

        return view('admin.story.flora.flora_page4.flora_page4', compact('flora_page4', 'search', 'searchMessage'));
    }

    public function store(FloraGalleryFormRequest $request){
        $validatedData = $request->validated();

        $flora_page4 = new Gallery;
        $existingPage = Gallery::where('flora_page4_title', $validatedData['flora_page4_title'])->first();

        if ($existingPage) {
            return redirect()->back()->withInput()->with('error', 'A flora page4 gallery with this title already exists.');
        }
        $flora_page4->flora_page4_title= $validatedData['flora_page4_title'];
        $flora_page4->save();

        return redirect('admin/story/flora/flora_page4/flora_page4')->with('message', 'New page added successfully');

    }

    public function destroy($flora_page4_id)
    {
        $flora_page4 = Gallery::findOrFail($flora_page4_id);
        $flora_page4->delete();
        return redirect('admin/story/flora/flora_page4/flora_page4')->with('status', 'Your Data is Deleted');
    }

}
