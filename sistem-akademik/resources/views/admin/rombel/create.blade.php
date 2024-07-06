<x-layout>
    <x-slot name="page_name">Halaman Rombel / Create</x-slot>
    <x-slot name="page_title"> Form Data Rombel</x-slot>
    <x-slot name="page_content">
    <form class="forms-sample" action="{{ url('dashboard/rombel/store') }}" method="post">
            @csrf
                <div class="form-group">
                  <label for="kode">Kode</label>
                  <input type="text" class="form-control" id="kode" name="kode" placeholder="masukan kode">
                </div>
                <div class="form-group">
                  <label for="kode">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="masukan nama">
                </div>
                <div class="form-group">
                  <label for="kode">Tahun Masuk</label>
                  <input type="text" class="form-control" id="thn_masuk" name="thn_masuk" placeholder="masukan tahun masuk">
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