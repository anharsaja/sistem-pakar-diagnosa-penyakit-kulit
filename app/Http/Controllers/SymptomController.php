<?php

namespace App\Http\Controllers;

use App\Models\Certainty;
use App\Models\Disease;
use App\Models\Symptom;
use Illuminate\Http\Request;

class SymptomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // try {
            // $diseases = Symptom::get();
            $diseases = Disease::get();
         
            return view('pages.symptom.index', compact('diseases'));
        // } catch (\Throwable $e) {
        //     // return redirect()->back()->withError($e->getMessage());
        // } catch (\Illuminate\Database\QueryException $e) {
        //     // return redirect()->back()->withError($e->getMessage());
        // }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $diseases = Disease::all();
        return view('pages.symptom.create', compact('diseases'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'code' => 'required',
                'disease_id' => 'required',
                'value' => 'required',
            ],
            [
                'required' => 'Data wajib diisi'
            ]
        );

        try {
             $symptom = Symptom::create([
                'name' => $request->name,
                'code' => $request->code,

            ]);

            Certainty::create([
                'disease_id' => $request->disease_id,
                'symptom_id' => $symptom->id,
                'value'=> $request->value,
            ]);
            return redirect()->route('symptom.index')->with('success', 'data berhasil ditambahkan');
        } catch (\Throwable $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError($e->getMessage());
        }
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
}
