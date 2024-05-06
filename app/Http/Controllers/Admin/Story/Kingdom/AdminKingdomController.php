<?php

namespace App\Http\Controllers\Admin\Story\Kingdom;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Kingdom\Kingdom;
use App\Http\Requests\Story\Kingdom\KingdomFormRequest;

class AdminKingdomController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = Kingdom::query();

        // If there's a search query, filter the stories based on the title
        if (!empty($search)) {
            $query->where('kingdom_title', 'LIKE', "%$search%");
        }

        $kingdom = $query->get();

        // Check if there are no stories found
        if ($kingdom->isEmpty() && !empty($search)) {
            $searchMessage = "No kingdom found matching '$search'";
        } else {
            $searchMessage = "";
        }

        return view('admin.story.kingdom.kingdom', compact('kingdom', 'search', 'searchMessage'));
    }

    public function store(KingdomFormRequest $request){
        $validatedData = $request->validated();

        $kingdom = new Kingdom;
        $existingPage = Kingdom::where('kingdom_title', $validatedData['kingdom_title'])->first();

        if ($existingPage) {
            return redirect()->back()->withInput()->with('error', 'A kingdom page with this title already exists.');
        }
        $kingdom->kingdom_title= $validatedData['kingdom_title'];
        $kingdom->save();

        return redirect('admin/story/kingdom/kingdom')->with('message', 'New stories added successfully');

    }

    public function destroy($kingdom_id)
    {
        $kingdom = Kingdom::findOrFail($kingdom_id);
        $kingdom->delete();
        return redirect('admin/story/kingdom/kingdom')->with('status', 'Your Data is Deleted');

    }
}
