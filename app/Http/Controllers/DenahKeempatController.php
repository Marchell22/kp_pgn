<?php

namespace App\Http\Controllers;

use App\Models\denahKeempat;
use Illuminate\Http\Request;

class DenahKeempatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexDenahKeempat()
    {
        return view('pegawai.denahKeempat');
    }
    public function denahKaryawanKeempat()
    {
        // $denahFirstData = denahPertama::first();

        // Pass the data to the view
        return view('karyawan.denahKaryawanKeempat');
    }
    public function getDataKeempat(Request $request)
    {
        $valueId = $request->input('valueId');
        // Replace 'DenahPertama' with your actual model class name
        $data = denahKeempat::where('value_id', $valueId)->get();

        return response()->json($data);
    }
    public function submitDenahKeempat(Request $request)
    {
        $name = json_encode($request->name);
        $value =json_encode($request->value);
        $valueId = $request->input('value_id'); // Ambil data-value-id dari form


        $in = [];
        $in['name'] = $name;
        $in['value'] = $value;
        $in['value_id'] = $valueId;
  
        if ($denahFirstdData = denahKeempat::where('value_id', $valueId)->first()) {
            $denahFirstdData->update($in);
        } else {
            // If it doesn't exist, create a new record
            denahKeempat::create($in);
        }
        return redirect()->route('admin.pegawai.denahKeempat');
    }

    
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
    public function show(denahKeempat $denahKeempat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(denahKeempat $denahKeempat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, denahKeempat $denahKeempat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(denahKeempat $denahKeempat)
    {
        //
    }
}
