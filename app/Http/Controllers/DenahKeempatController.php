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