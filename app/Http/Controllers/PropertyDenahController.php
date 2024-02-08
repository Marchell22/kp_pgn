<?php

namespace App\Http\Controllers;

use App\Models\PropertyDenah;
use Illuminate\Http\Request;

class PropertyDenahController extends Controller
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
        $request->validate([
            'inputs.*.name' => 'required',
        ],
        [
             'inputs.*.name' => 'The Name Field is Required',
        ]
    );

        foreach($request->inputs as $key => $value){
            PropertyDenah::create(['name' => $value['name']]);
        }
        return redirect()->route('admin.pegawai.denahKedua')->with('success', 'Data Berhasil ditambahkan');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(PropertyDenah $propertyDenah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PropertyDenah $propertyDenah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PropertyDenah $propertyDenah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PropertyDenah $propertyDenah)
    {
        //
    }
}
