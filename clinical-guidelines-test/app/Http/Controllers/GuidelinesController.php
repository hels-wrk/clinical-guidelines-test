<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use http\Client\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Jorenvh\Share\Share;

class GuidelinesController extends Controller
{

    public function index()
    {
        $guidelines = DB::table('guidelines')->simplePaginate(5);

        return view('index', ['guidelines' => $guidelines])->with('shareButtons', new Share);
    }


    public function show($groupName)
    {
        $guidelines = DB::table('guidelines')->where('groupName', $groupName)->simplePaginate(5);

        return view('index', ['guidelines' => $guidelines])->with('shareButtons', new Share);
    }


    public function showNewPage($id)
    {
        $item = DB::table('guidelines')->where('id', $id)->first();

        return view('page', ['item' => $item]);
    }


    public function savePdf($id)
    {
        $item = DB::table('guidelines')->where('id', $id)->first();
        $pdf = Pdf::loadView('page', ['item' => $item]);
        Storage::put('public/pdf/guidelines.pdf', $pdf->output());

        return $pdf->download('guidelines.pdf');
    }

}
