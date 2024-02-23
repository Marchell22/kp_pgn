<?php

namespace App\Http\Controllers;

use App\Models\denahKetiga;
use Illuminate\Http\Request;

class DenahKetigaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexDenahKetiga()
    {
        // $denahFirstData = denahPertama::first();

        // Pass the data to the view
        return view('pegawai.denahKetiga');
    }
    public function denahKaryawanKetiga()
    {
        // $denahFirstData = denahPertama::first();

        // Pass the data to the view
        return view('karyawan.denahKaryawanKetiga');
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
    public function show(denahKetiga $denahKetiga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(denahKetiga $denahKetiga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, denahKetiga $denahKetiga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(denahKetiga $denahKetiga)
    {
        //
    }
}
