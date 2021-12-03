<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class UserController extends Controller
{
    public function useravatar() {
        $user = Auth::user();
        return view('useravatar',compact('user',$user));
    }

    public function update_avatar(Request $request){

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        $user = Auth::user();
        $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();
        $request->avatar->storeAs('public',$avatarName);
        $user->avatar = $avatarName;
        $user->save();
        return back()
            ->with('success','You have successfully upload image.');
    }
}
