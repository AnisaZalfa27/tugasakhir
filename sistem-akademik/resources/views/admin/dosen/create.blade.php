<x-layout>
    <x-slot name="page_name">Halaman Dosen / Create</x-slot>
    <x-slot name="page_title"> Form Data Dosen</x-slot>
    <x-slot name="page_content">
    <form class="forms-sample" action="{{ url('dashboard/dosen/store') }}" method="post">
            @csrf
                <div class="form-group">
                  <label for="kode">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="nama">
                </div>
                <div class="form-group">
                    <label for="nama pasien">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" placeholder="masukan tgl lahir">
                  </div>
                  <div class="form-group">
                    <label for="tmp_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Masukan tanggal lahir">
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