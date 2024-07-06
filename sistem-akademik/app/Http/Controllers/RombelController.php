<?php

namespace App\Http\Controllers;

use App\Models\Rombel;
use Illuminate\Http\Request;

class RombelController extends Controller
{
    public function index(){
        $list_rombel = Rombel::all();
        return view('admin.rombel.index', compact('list_rombel'));
    }

    public function create(){
        return view('admin.rombel.create');
    }

    public function store(Request $request)
    {
        //validasi form input
        $validated = $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
            'thn_masuk' => 'required|string',
        ]);

        
        Rombel::create($validated);
        return redirect('dashboard/rombel')->with('pesan', 'Data berhasil ditambahkan');;
    }

    public function show($id)
    {
        $rombel = Rombel::find($id);
        return view('admin.rombel.show', compact('rombel'));
    }

    public function edit($id){
        $rombel = Rombel::find($id);
        return view('admin.rombel.edit', compact('rombel'));
    }

    public function update(Request $request, $id)
    {
         //validasi form input
         $validated = $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
            'thn_masuk' => 'required|string',
            
        ]);
        $rombel = Rombel::find($id);
        $rombel ->update($validated);
        return redirect('dashboard/rombel')->with('pesan', 'Data berhasil perbarui');
    }

    public function destroy($id)
    {
        $rombel = Rombel::find($id);
        $rombel ->delete();

        return redirect('dashboard/rombel')->with('pesan', 'Data berhasil dihapus');

}
}
