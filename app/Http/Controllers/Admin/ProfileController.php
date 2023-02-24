<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\ProfileHistory;
use Carbon\Carbon;

class ProfileController extends Controller
{
    public function add()
    {
        return view ('admin.profile.create');
    }
    public function create(Request $request)
    {
        $this->validate($request, Profile::$rules);
        
        $profile = new Profile;
        $form = $request->all();
        
        unset ($form['_token']);
        
        $profile->fill($form);
        $profile->save();
        
        return redirect('admin/profile/create');
    }
    public function edit(Request $request)
    {
        // dd($request->id);
        $profile = Profile::find($request->id);
       // dd($profile);
        if(empty($profile)) {
            abort(404);
        }
        return view('admin/profile/edit', ['profile_form' => $profile]);
    }
    public function update(Request $request)
    {
        $this->validate($request, Profile::$rules);
        $profile = Profile::find($request->id);
        $profile_form = $request->all();
        //dd($profile_form);
        $profile->fill($profile_form)->save();
        //dd($request->id);
        $profile_history = new ProfileHistory();
        $profile_history -> profile_id = $profile->id;
        $profile_history -> edited_at = Carbon::now();
        $profile_history -> save();
        return redirect('admin/profile/edit?id=1');
    }
}
