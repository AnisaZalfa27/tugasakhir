<x-layout>
    <x-slot name="page_name">Halaman Prodi / Edit </x-slot>
    <x-slot name="page_title"> Form Data Prodi</x-slot>
    <x-slot name="page_content">
    <form class="forms-sample" action="{{ url('dashboard/prodi/update', $prodi->id) }}" method="post">
          @csrf
          @method('put')
            <div class="form-group">
                <label for="nama pasien">Kode</label>
                <input type="text" class="form-control" id="kode" name="kode" placeholder="masukan Kode" value="{{ $prodi->kode}}">
              </div>
              <div class="form-group">
                <label for="tmp_lahir">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan tempat lahir" value="{{ $prodi->nama}}">
              </div>
              <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                    <button type="reset" class="btn btn-warning" name="reset">Reset</button>
                </div>
            </div>
          </form>
    </x-slot>
</x-layout>