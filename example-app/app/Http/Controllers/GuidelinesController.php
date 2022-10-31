<?php

namespace App\Http\Controllers;

use App\Models\guidelines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuidelinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $guidelines = DB::table('guidelines')->get();

        return view('index', ['guidelines' => $guidelines]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\guidelines $guidelines
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($groupName)
    {
        $guidelines = DB::table('guidelines')->where('groupName', $groupName)->get();

        return view('index', ['guidelines' => $guidelines]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\guidelines $guidelines
     * @return \Illuminate\Http\Response
     */
    public function edit(guidelines $guidelines)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\guidelines $guidelines
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, guidelines $guidelines)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\guidelines $guidelines
     * @return \Illuminate\Http\Response
     */
    public function destroy(guidelines $guidelines)
    {
        //
    }
}
