<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function uploadPDF(Request $request){

        $request->validate(['pdf' =>'required|mimes:pdf|max:25480',
        'image' => 'required|mimes:jpeg,png,jpg,gif|max:10240'
        ]);

        $pdfPath = $request->file('pdf')->storeAs('public/pdfs', $request->file('pdf')->getClientOriginalName());

        $imagePath = $request->file('image')->storeAs('public/images', $request->file('image')->getClientOriginalName());

        return back()->with('success', 'Catálogo subido correctamente');
    }

    public function showPDFs(){
        $pdfs = Storage::files('public/pdfs');
        $images = Storage::files('public/images');
        $catalogos=[];

        foreach($pdfs as $index => $pdf){
            $catalogos [] = [
                'name' => basename($pdf),
                'pdf' => $pdf,
                'image' => $images[$index] ?? null,
            ];
        }
        return view('catalogos', compact('catalogos'));
    }
}
