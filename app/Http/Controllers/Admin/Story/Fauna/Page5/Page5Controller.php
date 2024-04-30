<?php

namespace App\Http\Controllers\Admin\Story\Fauna\Page5;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Fauna\Page5\Gallery;
use App\Http\Requests\Story\Fauna\Page5\Page5FormRequest;

class Page5Controller extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = Gallery::query();

        // If there's a search query, filter the stories based on the title
        if (!empty($search)) {
            $query->where('fauna_page5_title', 'LIKE', "%$search%");
        }

        $fauna_page5 = $query->get();

        // Check if there are no stories found
        if ($fauna_page5->isEmpty() && !empty($search)) {
            $searchMessage = "No fauna_page5 found matching '$search'";
        } else {
            $searchMessage = "";
        }

        return view('admin.story.fauna.fauna_page5.fauna_page5', compact('fauna_page5', 'search', 'searchMessage'));
    }

    public function store(Page5FormRequest $request){
        $validatedData = $request->validated();

        $fauna_page5 = new Gallery;
        $existingPage = Gallery::where('fauna_page5_title', $validatedData['fauna_page5_title'])->first();

        if ($existingPage) {
            return redirect()->back()->withInput()->with('error', 'A fauna page5 gallery with this title already exists.');
        }
        $fauna_page5->fauna_page5_title= $validatedData['fauna_page5_title'];
        $fauna_page5->save();

        return redirect('admin/story/fauna/fauna_page5/fauna_page5')->with('message', 'New page added successfully');

    }

    public function destroy($fauna_page5_id)
    {
        $fauna_page5 = Gallery::findOrFail($fauna_page5_id);
        $fauna_page5->delete();
        return redirect('admin/story/fauna/fauna_page5/fauna_page5')->with('status', 'Your Data is Deleted');

    }
}
