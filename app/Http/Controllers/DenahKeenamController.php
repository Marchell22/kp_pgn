<?php

namespace App\Http\Controllers;

use App\Models\denahKeenam;
use Illuminate\Http\Request;

class DenahKeenamController extends Controller
{
    public function indexDenahKeenam()
    {
        // $denahFirstData = denahPertama::first();

        // Pass the data to the view
        return view('pegawai.denahKeenam');
    }
    public function denahKaryawanKeenam()
    {
        // $denahFirstData = denahPertama::first();

        // Pass the data to the view
        return view('karyawan.denahKaryawanKeenam');
    }
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(denahKeenam $denahKeenam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(denahKeenam $denahKeenam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, denahKeenam $denahKeenam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(denahKeenam $denahKeenam)
    {
        //
    }
}
