<?php

namespace App\Http\Controllers\Admin\Story\Fauna;

use Illuminate\Http\Request;
use App\Models\Story\Fauna\Fauna;
use App\Http\Controllers\Controller;
use App\Http\Requests\Story\Fauna\FaunaPage;

class FaunaPageController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = Fauna::query();

        // If there's a search query, filter the stories based on the title
        if (!empty($search)) {
            $query->where('fauna_page_title', 'LIKE', "%$search%");
        }

        $fauna_page = $query->get();

        // Check if there are no stories found
        if ($fauna_page->isEmpty() && !empty($search)) {
            $searchMessage = "No fauna_page found matching '$search'";
        } else {
            $searchMessage = "";
        }

        return view('admin.story.fauna.fauna_page', compact('fauna_page', 'search', 'searchMessage'));
    }

    public function store(FaunaPage $request){
        $validatedData = $request->validated();

        $fauna_page = new Fauna;
        $existingPage = Fauna::where('fauna_page_title', $validatedData['fauna_page_title'])->first();

        if ($existingPage) {
            return redirect()->back()->withInput()->with('error', 'A fauna page with this title already exists.');
        }
        $fauna_page->fauna_page_title= $validatedData['fauna_page_title'];
        $fauna_page->save();

        return redirect('admin/story/fauna/fauna_page')->with('message', 'New page added successfully');

    }

    public function destroy($fauna_page_id)
    {
        $fauna_page = Fauna::findOrFail($fauna_page_id);
        $fauna_page->delete();
        return redirect('admin/story/fauna/fauna_page')->with('status', 'Your Data is Deleted');

    }
}
