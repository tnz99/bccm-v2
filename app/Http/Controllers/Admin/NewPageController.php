<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddPageFormRequest;
use App\Models\NewPage; // Import the NewPage model

class NewPageController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = NewPage::query();

        // If there's a search query, filter the stories based on the title
        if (!empty($search)) {
            $query->where('page_title', 'LIKE', "%$search%");
        }

        $new_page = $query->get();

        // Check if there are no stories found
        if ($new_page->isEmpty() && !empty($search)) {
            $searchMessage = "No Page found matching '$search'";
        } else {
            $searchMessage = "";
        }

        return view('admin.edit_home', compact('new_page', 'search', 'searchMessage'));
    }

    public function store(AddPageFormRequest $request)
    {
        $validatedData = $request->validated();

        // Check if a page with the same title already exists
        $existingPage = NewPage::where('page_title', $validatedData['page_title'])->first();

        if ($existingPage) {
            return redirect()->back()->withInput()->with('error', 'A page with this title already exists.');
        }

        $new_page = new NewPage;
        $new_page->page_title = $validatedData['page_title'];

        $new_page->save();
        return redirect('admin/edit_home')->with('status', 'New Page Added Successfully');
    }


    public function destroy($page_title_id)
    {
        $new_page = NewPage::findOrFail($page_title_id);
        $new_page->delete();
        return redirect('admin/edit_home')->with('status', 'Your Data is Deleted');
    }



}
