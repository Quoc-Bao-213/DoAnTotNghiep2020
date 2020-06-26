<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $user = User::find($id);
        return View('betube.profile.about-me', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('betube.profile.setting', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->channel_name = $request->channel_name;
        $user->description = $request->description;
        $user->save();

        return redirect()->back()->with('success', 'Update Successfully!');
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

    public function uploadAvatar(Request $request, $id)
    {
        $user = User::find($id);

        if ($request->hasFile('image_avatar')) {
            $user->clearMediaCollection('images');

            $user->addMediaFromRequest('image_avatar')
                ->toMediaCollection('images');
        }

        return redirect()->back();
    }

    public function uploadBackgroundImage(Request $request, $id)
    {
        $user = User::find($id);

        if ($request->hasFile('image_cover')) {
            $user->clearMediaCollection('covers');

            $user->addMediaFromRequest('image_cover')
                ->toMediaCollection('covers');
        }

        return redirect()->back();
    }

    public function indexChangePassword()
    {
        return view('betube.auth.change-pass');
    }
    
    public function changePassword(ProfileRequest $request, $id)
    {
        $user = User::find($id);
        $current_pass = $user->password;
        if (Hash::check($request->old_password, $current_pass)) {
            $user->password = Hash::make($request->new_password);
            $user->save();
            return redirect()->back()->with('success', 'Change password successfully!');
        } else {
            return  redirect()->back()->with('error', 'Wrong password! ');
        }
    }
}