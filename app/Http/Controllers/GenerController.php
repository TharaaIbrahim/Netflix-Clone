<?php

namespace App\Http\Controllers;

use App\Models\gener;
use Illuminate\Http\Request;

class GenerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $geners=Gener::all();
        return view('geners/index',compact('geners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('geners/create');
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
        Gener::create($request->all());
        return redirect()->back()->with(['message'=>'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gener  $gener
     * @return \Illuminate\Http\Response
     */
    public function show(gener $gener)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gener  $gener
     * @return \Illuminate\Http\Response
     */
    public function edit(gener $gener)
    {
        //
        return view('geners/edit',compact('gener'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gener  $gener
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gener $gener)
    {
        //
        $gener->update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gener  $gener
     * @return \Illuminate\Http\Response
     */
    public function destroy(gener $gener)
    {
        //
        $gener->deleteOrFail(); 
        return redirect()->back();
    }
}
