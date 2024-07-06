<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $list_dosen = Dosen::all();
        return view('admin.dosen.index', compact('list_dosen'));
    }

    public function create(){
        return view('admin.dosen.create');
    }

    public function store(Request $request)
    {
        //validasi form input
        $validated = $request->validate([
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|string',
        ]);

        
        Dosen::create($validated);
        return redirect('dashboard/dosen')->with('pesan', 'Data berhasil ditambahkan');;
    }

    public function show($id)
    {
        $dosen = Dosen::find($id);
        return view('admin.dosen.show', compact('dosen'));
    }

    public function edit($id){
        $dosen = Dosen::find($id);
        return view('admin.dosen.edit', compact('dosen'));
    }

    public function update(Request $request, $id)
    {
         //validasi form input
         $validated = $request->validate([
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|string',
        ]);
        $dosen = Dosen::find($id);
        $dosen ->update($validated);
        return redirect('dashboard/dosen')->with('pesan', 'Data berhasil perbarui');
    }

    public function destroy($id)
    {
        $dosen = Dosen::find($id);
        $dosen ->delete();

        return redirect('dashboard/dosen')->with('pesan', 'Data berhasil dihapus');
    }
}
