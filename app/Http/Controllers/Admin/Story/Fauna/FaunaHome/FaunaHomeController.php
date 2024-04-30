<?php

namespace App\Http\Controllers\Admin\Story\Fauna\FaunaHome;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Fauna\FaunaHome\FaunaHome;
use App\Http\Requests\Story\Fauna\FaunaHome\FaunaHomeFormRequest;

class FaunaHomeController extends Controller
{
    public function fauna_home_create(){
        return view('admin.story.fauna.fauna_home.fauna_home');
    }

    public function store(FaunaHomeFormRequest $request){
        $validatedData = $request->validated();

        $fauna_home = new FaunaHome;
        $fauna_home->fauna_home_title= $validatedData['fauna_home_title'];
        $fauna_home->fauna_home_description= $validatedData['fauna_home_description'];

        if ($request->hasFile('fauna_home_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('fauna_home_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/fauna/fauna_home/', $filename);
            $fauna_home->fauna_home_image = $filename; // Replace X with 1, 2, 3, or 4
            $fauna_home->save();
            return redirect('admin/story/fauna/fauna_page')->with('message', 'Fauna Home Page edited successfully');
        }
    }
}
