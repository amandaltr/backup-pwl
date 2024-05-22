<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class akun extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Ini adalah return halaman indeks(latihan)";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "ini adalah return halaman create(latihan)";
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "ini adalah return dari halaman edit(latihan)".$id;
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
