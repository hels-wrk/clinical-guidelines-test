<?php

namespace App\Http\Controllers;

use App\Models\guidelines;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GuidelinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $guidelines = DB::table('guidelines')->simplePaginate(10);

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
        $guidelines = DB::table('guidelines')->where('groupName', $groupName)->simplePaginate(10);

        return view('index', ['guidelines' => $guidelines]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\guidelines $guidelines
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showNewPage($id)
    {
        $item = DB::table('guidelines')->where('id', $id)->first();

        return view('page', ['item' => $item]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\guidelines $guidelines
     * @return \Illuminate\Http\Response
     */
    public function savePdf($id)
    {
        $item = DB::table('guidelines')->where('id', $id)->first();
        $pdf = Pdf::loadView('page', ['item' => $item]);
        Storage::put('public/pdf/invoice.pdf', $pdf->output());

        return $pdf->download('invoice.pdf');
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
