<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index(){
        $list_mahasiswa = Mahasiswa::all();
        return view('admin.mahasiswa.index', compact('list_mahasiswa'));
    }

    public function create(){
        return view('admin.mahasiswa.create');
    }

    public function store(Request $request)
    {
        //validasi form input
        $validated = $request->validate([
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|string',
            'ipk' => 'required|string'
        ]);

        
        Mahasiswa::create($validated);
        return redirect('dashboard/mahasiswa')->with('pesan', 'Data berhasil ditambahkan');;
    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('admin.mahasiswa.show', compact('mahasiswa'));
    }

    public function edit($id){
        $mahasiswa = Mahasiswa::find($id);
        return view('admin.mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
         //validasi form input
         $validated = $request->validate([
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|string',
            'ipk' => 'required|string'
        ]);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa ->update($validated);
        return redirect('dashboard/mahasiswa')->with('pesan', 'Data berhasil perbarui');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa ->delete();

        return redirect('dashboard/mahasiswa')->with('pesan', 'Data berhasil dihapus');
    }


}
