<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HarbyyyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'redirect ke halaman pegawai';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($param1,$param2)
    {
        return 'nama: '. $param1. '    alamat: '. $param2;
    }

    /**
     * Display the specified resource.
     */
    public function show($param1)
    {
        return 'id pegawai: '. $param1;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($param1,$param2)
    {
        echo "nama: $param1 alamat: $param2";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( string $param1)
    {
       return'Redirect ke halaman perubahan data pegawai milik ID ='. $param1;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'Hapus data pegawai yang memiliki ID ='. $param1;
    }
}
