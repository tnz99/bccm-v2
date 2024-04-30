<?php

namespace App\Http\Controllers\Admin\Story\Flora\Page3;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Flora\Page3\Gallery;
use App\Http\Requests\Story\Flora\Page3\FloraGalleryFormRequest;

class FloraPage3Controller extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = Gallery::query();

        // If there's a search query, filter the stories based on the title
        if (!empty($search)) {
            $query->where('flora_page3_title', 'LIKE', "%$search%");
        }

        $flora_page3 = $query->get();

        // Check if there are no stories found
        if ($flora_page3->isEmpty() && !empty($search)) {
            $searchMessage = "No flora_page3 found matching '$search'";
        } else {
            $searchMessage = "";
        }

        return view('admin.story.flora.flora_page3.flora_page3', compact('flora_page3', 'search', 'searchMessage'));
    }

    public function store(FloraGalleryFormRequest $request){
        $validatedData = $request->validated();

        $flora_page3 = new Gallery;
        $existingPage = Gallery::where('flora_page3_title', $validatedData['flora_page3_title'])->first();

        if ($existingPage) {
            return redirect()->back()->withInput()->with('error', 'A flora page3 gallery with this title already exists.');
        }

        $flora_page3->flora_page3_title= $validatedData['flora_page3_title'];
        $flora_page3->save();

        return redirect('admin/story/flora/flora_page3/flora_page3')->with('message', 'New page added successfully');

    }

    public function destroy($flora_page3_id)
    {
        $flora_page3 = Gallery::findOrFail($flora_page3_id);
        $flora_page3->delete();
        return redirect('admin/story/flora/flora_page3/flora_page3')->with('status', 'Your Data is Deleted');

    }
}
