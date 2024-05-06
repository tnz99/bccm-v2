<?php

namespace App\Http\Controllers\Admin\Story\Flora;

use Illuminate\Http\Request;
use App\Models\Story\Flora\Flora;
use App\Http\Controllers\Controller;
use App\Http\Requests\Story\Flora\FloraPageFormRequest;

class FloraPageController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = Flora::query();

        // If there's a search query, filter the stories based on the title
        if (!empty($search)) {
            $query->where('flora_page_title', 'LIKE', "%$search%");
        }

        $flora_page = $query->get();

        // Check if there are no stories found
        if ($flora_page->isEmpty() && !empty($search)) {
            $searchMessage = "No flora_page found matching '$search'";
        } else {
            $searchMessage = "";
        }

        return view('admin.story.flora.flora_page', compact('flora_page', 'search', 'searchMessage'));
    }

    public function store(FloraPageFormRequest $request){
        $validatedData = $request->validated();

        $flora_page = new Flora;
        $existingPage = Flora::where('flora_page_title', $validatedData['flora_page_title'])->first();

        if ($existingPage) {
            return redirect()->back()->withInput()->with('error', 'A flora page title this title already exists.');
        }
        $flora_page->flora_page_title= $validatedData['flora_page_title'];
        $flora_page->save();

        return redirect('admin/story/flora/flora_page')->with('message', 'New page added successfully');

    }

    public function destroy($flora_page_id)
    {
        $flora_page = Flora::findOrFail($flora_page_id);
        $flora_page->delete();
        return redirect('admin/story/flora/flora_page')->with('status', 'Your Data is Deleted');

    }
}
