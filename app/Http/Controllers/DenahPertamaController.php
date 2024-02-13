<?php

namespace App\Http\Controllers;

use App\Models\denahPertama;
use Illuminate\Http\Request;

class DenahPertamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexDenahPertama()
    {
        // $denahFirstData = denahPertama::first();

        // Pass the data to the view
        return view('pegawai.denahPertama');
    }
    public function getData(Request $request)
    {
        $valueId = $request->input('valueId');
        // Replace 'DenahPertama' with your actual model class name
        $data = denahPertama::where('value_id', $valueId)->get();

        return response()->json($data);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function submitDenahPertama(Request $request)
    {
        $name = json_encode($request->name);
        $value =json_encode($request->value);
        $valueId = $request->input('value_id'); // Ambil data-value-id dari form


        $in = [];
        $in['name'] = $name;
        $in['value'] = $value;
        $in['value_id'] = $valueId;
  
        if ($denahFirstdData = denahPertama::where('value_id', $valueId)->first()) {
            $denahFirstdData->update($in);
        } else {
            // If it doesn't exist, create a new record
            denahPertama::create($in);
        }
        return redirect()->route('admin.pegawai.denahPertama');
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
    public function show(denahPertama $denahPertama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(denahPertama $denahPertama)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, denahPertama $denahPertama)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(denahPertama $denahPertama)
    {
        //
    }
}
