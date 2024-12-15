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

    public function create()
    {
        $diseases = Disease::all();
        return view('pages.diseases.create', compact('diseases'));
    }

    public function edit(string $id)
    {
        $disease = Disease::findOrFail($id);
        return view('pages.diseases.edit', compact('disease'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
            'name' => 'required|string',
        ]);

        try {
            Disease::create([
                'code' => $request->code,
                'name' => $request->name,
            ]);

            return redirect()->route('disease.index')->with('success', 'data berhasil ditambahkan');
        } catch (\Throwable $e) {
            // return redirect()->back()->withError($e->getMessage());
            return redirect()->back()->with('error', 'Data tidak boleh sama dengan data yang ada');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->with('error', 'Data tidak boleh sama dengan data yang ada');
        }

        // return response()->json($disease, 201);
    }


    public function show(Disease $disease)
    {
        return response()->json($disease);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required'
        ]);
        try {
            $dataSymptom = Disease::find($id);

            $dataSymptom->update([
                'code' => $request->code,
                'name' => $request->name
            ]);


            return redirect()->route('disease.index')->with('success', 'data berhasil diubah');
        } catch (\Throwable $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError($e->getMessage());
        }
    }
    public function destroy(Disease $disease)
    {
        try {
            // Temukan penyakit berdasarkan ID
            $disease->delete();
            // return response()->json(null, 204);
            return redirect()->back()->with('success', 'data berhasil dihapus');
        } catch (\Throwable $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
