<?php

namespace App\Http\Controllers\Admin\Story\Fauna\Page6;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Fauna\Page6\Gallery;
use App\Http\Requests\Story\Fauna\Page6\Page6FormRequest;

class Page6Controller extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = Gallery::query();

        // If there's a search query, filter the stories based on the title
        if (!empty($search)) {
            $query->where('fauna_page6_title', 'LIKE', "%$search%");
        }

        $fauna_page6 = $query->get();

        // Check if there are no stories found
        if ($fauna_page6->isEmpty() && !empty($search)) {
            $searchMessage = "No fauna_page6 found matching '$search'";
        } else {
            $searchMessage = "";
        }

        return view('admin.story.fauna.fauna_page6.fauna_page6', compact('fauna_page6', 'search', 'searchMessage'));
    }

    public function store(Page6FormRequest $request){
        $validatedData = $request->validated();

        $fauna_page6 = new Gallery;
        $existingPage = Gallery::where('fauna_page6_title', $validatedData['fauna_page6_title'])->first();

        if ($existingPage) {
            return redirect()->back()->withInput()->with('error', 'A fauna page gallery with this title already exists.');
        }

        $fauna_page6->fauna_page6_title= $validatedData['fauna_page6_title'];
        $fauna_page6->save();

        return redirect('admin/story/fauna/fauna_page6/fauna_page6')->with('message', 'New page added successfully');

    }

    public function destroy($fauna_page6_id)
    {
        $fauna_page6 = Gallery::findOrFail($fauna_page6_id);
        $fauna_page6->delete();
        return redirect('admin/story/fauna/fauna_page6/fauna_page6')->with('status', 'Your Data is Deleted');

    }
}
