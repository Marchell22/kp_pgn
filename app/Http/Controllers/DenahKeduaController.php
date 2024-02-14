<?php

namespace App\Http\Controllers;

use App\Models\denahKedua;
use Illuminate\Http\Request;

class DenahKeduaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexDenahKedua()
    {
        
        // $denahSecondData = denahKedua::first();

        // Pass the data to the view
        return view('pegawai.denahKedua');
    }
    public function getData(Request $request)
    {
        $valueId = $request->input('valueId');
        // Replace 'DenahPertama' with your actual model class name
        $data = denahKedua::where('value_id', $valueId)->get();

        return response()->json($data);
    }
    public function submitDenahKedua(Request $request)
    {
        $name = json_encode($request->name);
        $value =json_encode($request->value);
        $valueId = $request->input('value_id');

        $in = [];
        $in['name'] = $name;
        $in['value'] = $value;
        $in['value_id'] = $valueId;
  
       if ($denahSecondData = denahKedua::where('value_id', $valueId)->first()) {
            $denahSecondData->update($in);
        } else {
            // If it doesn't exist, create a new record
            denahKedua::create($in);
        }
        return redirect()->route('admin.pegawai.denahKedua');
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
    public function show(denahKedua $denahKedua)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(denahKedua $denahKedua)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, denahKedua $denahKedua)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(denahKedua $denahKedua)
    {
        //
    }
}
