<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        return Pegawai::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|unique:pegawais,nip',
            'jabatan' => 'required|string|max:255',
        ]);

        $pegawai = Pegawai::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Data pegawai berhasil ditambahkan.',
            'data' => $pegawai
        ], 201);
    }

    public function show($id)
    {
        $pegawai = Pegawai::findOrFail($id);

        return response()->json([
            'success' => true,
            'data' => $pegawai
        ]);
    }

    public function update(Request $request, $id)
    {
        $pegawai = Pegawai::findOrFail($id);

        $pegawai->update($request->all());

        return $pegawai;
    }

    public function destroy($id)
    {
        return Pegawai::destroy($id);
    }
}
