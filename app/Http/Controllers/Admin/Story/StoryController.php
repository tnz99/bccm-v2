<?php

namespace App\Http\Controllers\Admin\Story;

use Illuminate\Http\Request;
use App\Models\Story\Stories;
use App\Http\Controllers\Controller;
use App\Http\Requests\Story\StoriesFormRequest;

class StoryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = Stories::query();

        // If there's a search query, filter the stories based on the title
        if (!empty($search)) {
            $query->where('stoies_title', 'LIKE', "%$search%");
        }

        $story = $query->get();

        // Check if there are no stories found
        if ($story->isEmpty() && !empty($search)) {
            $searchMessage = "No stories found matching '$search'";
        } else {
            $searchMessage = "";
        }

        return view('admin.story.stories', compact('story', 'search', 'searchMessage'));
    }
    public function store(StoriesFormRequest $request){
        $validatedData = $request->validated();

        $story = new Stories;
        $existingPage = Stories::where('stoies_title', $validatedData['stoies_title'])->first();

        if ($existingPage) {
            return redirect()->back()->withInput()->with('error', 'A storieswith this title already exists.');
        }
        $story->stoies_title= $validatedData['stoies_title'];
        $story->save();

        return redirect('admin/story/stories')->with('message', 'New stories added successfully');

    }

    public function destroy($stories_id)
    {
        $story = Stories::findOrFail($stories_id);
        $story->delete();
        return redirect('admin/story/stories')->with('status', 'Your Data is Deleted');

    }

}
