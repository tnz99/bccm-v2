<?php

namespace App\Http\Controllers\Admin\Story\Kingdom\Gallery;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Kingdom\Gallery\KingdomGallery;
use App\Http\Requests\Story\Kingdom\Gallery\KingdomGalleryFormRequest;

class KingdomGalleryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = KingdomGallery::query();

        // If there's a search query, filter the stories based on the title
        if (!empty($search)) {
            $query->where('kingdom_gallery_title', 'LIKE', "%$search%");
        }

        $kingdom_gallery = $query->get();

        // Check if there are no stories found
        if ($kingdom_gallery->isEmpty() && !empty($search)) {
            $searchMessage = "No Kingdom Gallery found matching '$search'";
        } else {
            $searchMessage = "";
        }
        return view('admin.story.kingdom.gallery.gallery', compact('kingdom_gallery', 'search', 'searchMessage'));
    }

    public function store(KingdomGalleryFormRequest $request){
        $validatedData = $request->validated();

        $kingdom_gallery = new KingdomGallery;

        $existingPage = KingdomGallery::where('kingdom_gallery_title', $validatedData['kingdom_gallery_title'])->first();

        if ($existingPage) {
            return redirect()->back()->withInput()->with('error', 'A kingdom gallery with this title already exists.');
        }
        $kingdom_gallery->kingdom_gallery_title= $validatedData['kingdom_gallery_title'];
        $kingdom_gallery->save();

        return redirect('admin/story/kingdom/gallery/gallery')->with('message', 'New Gallery added successfully');

    }

    public function destroy($kingdom_gallery_id)
    {
        // Trigger the event before deleting the main gallery

        $kingdom_gallery = KingdomGallery::findOrFail($kingdom_gallery_id);


        // Delete the main gallery
        $kingdom_gallery->delete();

        return redirect('admin/story/kingdom/gallery/gallery')->with('status', 'Your Data is Deleted');
    }


}
