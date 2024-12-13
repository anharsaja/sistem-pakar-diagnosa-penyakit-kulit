<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Disease;

class DiseaseController extends Controller
{

    public function index()
    {
        $diseases = Disease::all();
        // return response()->json($diseases);
        return view(
            "pages.diseases.index",
            compact("diseases")
        );
    }


    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string|unique:diseases,code',
            'name' => 'required|string',
        ]);

        $disease = Disease::create([
            'code' => $request->code,
            'name' => $request->name,
        ]);

        return response()->json($disease, 201);
    }


    public function show(Disease $disease)
    {
        return response()->json($disease);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required|string',
            'name' => 'required|string',
        ]);

        $disease = Disease::findOrFail($id); // Akan menampilkan 404 jika tidak ditemukan

        $disease->update([
            'code' => $request->code,
            'name' => $request->name,
        ]);

        // return response()->json($disease);
        return redirect()->back();
    }

    public function destroy(Disease $disease)
    {
        // Temukan penyakit berdasarkan ID
        $disease->delete();
        // return response()->json(null, 204);
        return redirect()->back();
    }
}
