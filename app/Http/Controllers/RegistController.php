<?php

namespace App\Http\Controllers;

use App\Models\Regist;
use Illuminate\Http\Request;

class RegistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin', [
            'regists' => Regist::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'age' => 'required',
            'major' => 'required',
            'reason' => 'required'
        ]);
        Regist::create($validatedData);
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Regist  $regist
     * @return \Illuminate\Http\Response
     */
    public function show(Regist $regist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Regist  $regist
     * @return \Illuminate\Http\Response
     */
    public function edit(Regist $regist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Regist  $regist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regist $regist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Regist  $regist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regist $regist)
    {
        //
    }
}
