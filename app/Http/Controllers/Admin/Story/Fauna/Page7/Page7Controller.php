<?php

namespace App\Http\Controllers\Admin\Story\Fauna\Page7;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Fauna\Page7\Gallery;
use App\Http\Requests\Story\Fauna\Page7\Page7FormRequest;

class Page7Controller extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = Gallery::query();

        // If there's a search query, filter the stories based on the title
        if (!empty($search)) {
            $query->where('fauna_page7_title', 'LIKE', "%$search%");
        }

        $fauna_page7 = $query->get();

        // Check if there are no stories found
        if ($fauna_page7->isEmpty() && !empty($search)) {
            $searchMessage = "No fauna_page7 found matching '$search'";
        } else {
            $searchMessage = "";
        }

        return view('admin.story.fauna.fauna_page7.fauna_page7', compact('fauna_page7', 'search', 'searchMessage'));
    }

    public function store(Page7FormRequest $request){
        $validatedData = $request->validated();

        $fauna_page7 = new Gallery;
        $existingPage = Gallery::where('fauna_page7_title', $validatedData['fauna_page7_title'])->first();

        if ($existingPage) {
            return redirect()->back()->withInput()->with('error', 'A fauna page7 gallery with this title already exists.');
        }
        $fauna_page7->fauna_page7_title= $validatedData['fauna_page7_title'];
        $fauna_page7->save();

        return redirect('admin/story/fauna/fauna_page7/fauna_page7')->with('message', 'New page added successfully');

    }

    public function destroy($fauna_page7_id)
    {
        $fauna_page7 = Gallery::findOrFail($fauna_page7_id);
        $fauna_page7->delete();
        return redirect('admin/story/fauna/fauna_page7/fauna_page7')->with('status', 'Your Data is Deleted');

    }
}
