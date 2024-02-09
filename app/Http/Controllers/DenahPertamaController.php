<?php

namespace App\Http\Controllers;

use App\Models\denahPertama;
use Illuminate\Http\Request;

class DenahPertamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $denahFirstData = denahPertama::first();

        // Pass the data to the view
        return view('pegawai.denahPertama', compact('denahFirstData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function submit(Request $request)
    {
        $name = json_encode($request->name);
        $value =json_encode($request->value);

        $in = [];
        $in['name'] = $name;
        $in['value'] = $value;
  
        $denahFirstData = denahPertama::first();
        $denahFirstData -> update($in);
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
