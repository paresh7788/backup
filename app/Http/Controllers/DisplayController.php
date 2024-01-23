<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\upload;

class DisplayController extends Controller
{

    public function index()
    {
        $uploads = upload::all(); // Fetch all students or adjust as needed

        return view('display', compact('uploads'));
    }

    public function show($id)
    {
        $upload = upload::findOrFail($id);

        return view('display', compact('uploads'));
    }
}
