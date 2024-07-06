<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index(){
        $list_prodi = Prodi::all();
        return view('admin.prodi.index', compact('list_prodi'));
    }

    public function create(){
        return view('admin.prodi.create');
    }

    public function store(Request $request)
    {
        //validasi form input
        $validated = $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
        ]);

        
        Prodi::create($validated);
        return redirect('dashboard/prodi')->with('pesan', 'Data berhasil ditambahkan');;
    }

    public function show($id)
    {
        $prodi = Prodi::find($id);
        return view('admin.prodi.show', compact('prodi'));
    }

    public function edit($id){
        $prodi = Prodi::find($id);
        return view('admin.prodi.edit', compact('prodi'));
    }

    public function update(Request $request, $id)
    {
         //validasi form input
         $validated = $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
            
        ]);
        $prodi = Prodi::find($id);
        $prodi ->update($validated);
        return redirect('dashboard/prodi')->with('pesan', 'Data berhasil perbarui');
    }

    public function destroy($id)
    {
        $prodi = Prodi::find($id);
        $prodi ->delete();

        return redirect('dashboard/prodi')->with('pesan', 'Data berhasil dihapus');

}
}