<?php

namespace App\Http\Controllers\Admin\Story\Fauna\Page3;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Fauna\Page3\Gallery;
use App\Http\Requests\Story\Fauna\Page3\Page3FormRequest;

class Page3Controller extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = Gallery::query();

        // If there's a search query, filter the stories based on the title
        if (!empty($search)) {
            $query->where('fauna_page3_title', 'LIKE', "%$search%");
        }

        $fauna_page3 = $query->get();

        // Check if there are no stories found
        if ($fauna_page3->isEmpty() && !empty($search)) {
            $searchMessage = "No fauna_page3 found matching '$search'";
        } else {
            $searchMessage = "";
        }

        return view('admin.story.fauna.fauna_page3.fauna_page3', compact('fauna_page3', 'search', 'searchMessage'));
    }
    public function store(Page3FormRequest $request){
        $validatedData = $request->validated();

        $fauna_page3 = new Gallery;
        $existingPage = Gallery::where('fauna_page3_title', $validatedData['fauna_page3_title'])->first();

        if ($existingPage) {
            return redirect()->back()->withInput()->with('error', 'A fauna page3 gallery with this title already exists.');
        }
        $fauna_page3->fauna_page3_title= $validatedData['fauna_page3_title'];
        $fauna_page3->save();

        return redirect('admin/story/fauna/fauna_page3/fauna_page3')->with('message', 'New page added successfully');

    }

    public function destroy($fauna_page3_id)
    {
        $fauna_page3 = Gallery::findOrFail($fauna_page3_id);
        $fauna_page3->delete();
        return redirect('admin/story/fauna/fauna_page3/fauna_page3')->with('status', 'Your Data is Deleted');

    }
}
