<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\upload;

class addstudentcontroller extends Controller
{
    public function create()
    {
        return view('addstudent');
    }

    public function keep(Request $req)
    {

        // dd($req->file()['profile']);

        $req->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:uploads|max:255',
            'profile_pic' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        
        // $profilePicPath = $req->file('profile_pic')
        //     ? $req->file('profile_pic')->store('profile_pics', 'public')
        //     : null;

        $profilePicPath =$req->file()['profile']->store('profile_pics', 'public');


        $upload = upload::create([
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'profile_pic' => $profilePicPath,
            
        ]);

        return redirect()->route('home')->with('success', 'Student added successfully!');
    }
}
