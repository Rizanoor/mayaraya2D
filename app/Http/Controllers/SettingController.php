<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Image;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        return view('pages.setting',[
            'user' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $redirect)
    {
        $data = $request->all();
        $item = User::findOrFail(Auth::user()->id);
        
        if ($request->password) {
            $data['password'] =  bcrypt($request->password);
        } else {
            unset($data['password']);
        }

        // Handle the user upload of photo
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $filename = time() . '.' . $photo->getClientOriginalExtension();
            // Image::make($photo)->resize(300, 300)->save(public_path('uploads/photos/' . $filename));
            Storage::putFileAs('public/image', $photo, $filename);

            // $user = Auth::user();
            $data['photo'] = $filename;
            // $item->save();
        }

        // return view('profile', array('user'=> Auth::user()));

        $item->update($data);
        $request->session()->flash('success', "Your account '{$item->name}' has been updated");

        return redirect()->route($redirect);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
