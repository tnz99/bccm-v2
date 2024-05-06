<?php

namespace App\Http\Controllers\Admin\Story\Kingdom\KingdomHome;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Kingdom\KingdomHome\KingdomHome;
use App\Http\Requests\Story\Kingdom\KingdomHome\KingdomHomeFormRequest;

class KingdomHomeController extends Controller
{
    public function kingdom_home_create(){
        return view('admin.story.kingdom.kingdom_home.kingdom_home');
    }

    public function store(KingdomHomeFormRequest $request){
        $validatedData = $request->validated();

        $kingdom_home = new KingdomHome;
        $kingdom_home->kingdom_home_title= $validatedData['kingdom_home_title'];
        $kingdom_home->kingdom_home_description= $validatedData['kingdom_home_description'];

        if ($request->hasFile('kingdom_home_image')) { // Replace X with 1, 2, 3, or 4
            $file = $request->file('kingdom_home_image',);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/story/kingdom/kingdom_home/', $filename);
            $kingdom_home->kingdom_home_image = $filename; // Replace X with 1, 2, 3, or 4
            $kingdom_home->save();
            return redirect('admin/story/kingdom/kingdom')->with('message', 'Kingdom Home Page edited successfully');
        }
    }
}
