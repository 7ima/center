<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class courseController extends Controller
{
    public function uploadpage()
    {
        return view('book');
    }
    public function store(Request $request)
    {
        $data = new books();
        $data->name = $request->name;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(courses $courses)
    {
        $data = courses::all();
        return view('courses1z', compact('data'));
    }
}
