<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Image;

class SettingController extends Controller
{
    public function index()
    {
        return view('pages.setting');
    }

    public function update(Request $request)
    {
        // Handle the user upload of photo
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $filename = time() . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(300, 300)->save(public_path('uploads/photos/' . $filename));

            $user = Auth::user();
            $user->photo = $filename;
            $user->save();
        }

        return view('pages.setting', array('user'=> Auth::user()));
    }
}
