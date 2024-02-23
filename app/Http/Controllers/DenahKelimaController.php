<?php

namespace App\Http\Controllers;

use App\Models\denahKelima;
use Illuminate\Http\Request;

class DenahKelimaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexDenahKelima()
    {
        // $denahFirstData = denahPertama::first();

        // Pass the data to the view
        return view('pegawai.denahKelima');
    }
    public function denahKaryawanKelima()
    {
        // $denahFirstData = denahPertama::first();

        // Pass the data to the view
        return view('karyawan.denahKaryawanKelima');
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
    public function show(denahKelima $denahKelima)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(denahKelima $denahKelima)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, denahKelima $denahKelima)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(denahKelima $denahKelima)
    {
        //
    }
}
