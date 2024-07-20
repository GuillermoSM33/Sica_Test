<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Catalogo;

class PDFController extends Controller
{
    public function uploadPDF(Request $request)
    {
        $request->validate([
            'pdf' => 'required|mimes:pdf|max:25480',
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:10240'
        ]);

        $pdfName = time() . '_' . $request->file('pdf')->getClientOriginalName();
        $imageName = time() . '_' . $request->file('image')->getClientOriginalName();

        $pdfPath = $request->file('pdf')->storeAs('public/pdfs', $pdfName);
        $imagePath = $request->file('image')->storeAs('public/images', $imageName);

        Catalogo::create([
            'pdf' => $pdfPath,
            'image' => $imagePath,
        ]);

        return back()->with('success', 'Catálogo subido correctamente');
    }

    public function showPDFs()
    {
        $catalogos = Catalogo::all()->map(function ($catalogo) {
            $catalogo->cleanName = $this->cleanFileName(basename($catalogo->pdf));
            return $catalogo;
        });

        return view('catalogos', compact('catalogos'));
    }

    private function cleanFileName($fileName)
    {
        $cleanName = preg_replace('/^\d+_/', '', $fileName);
        $cleanName = preg_replace('/\.pdf$/', '', $cleanName);
        return $cleanName;
    }
}
