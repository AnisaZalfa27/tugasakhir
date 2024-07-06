<x-layout>
        <x-slot name="page_name">Halaman Mahasiswa / Edit </x-slot>
        <x-slot name="page_title"> Form Data Mahasiswa</x-slot>
        <x-slot name="page_content">
        <form class="forms-sample" action="{{ url('dashboard/mahasiswa/update', $mahasiswa->id) }}" method="post">
              @csrf
              @method('put')
                <div class="form-group">
                    <label for="nama pasien">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="masukan Nama" value="{{ $mahasiswa->nama}}">
                  </div>
                  <div class="form-group">
                    <label for="tmp_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" placeholder="Masukan tempat lahir" value="{{ $mahasiswa->tmp_lahir}}">
                  </div>
                  <div class="form-group">
                    <label for="tmp_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Masukan tanggal lahir" value="{{ $mahasiswa->tgl_lahir }}">
                  </div>
                  <div class="form-group">
                    <label for="tmp_lahir">Ipk</label>
                    <input type="text" class="form-control" id="ipk" name="ipk" placeholder="Masukan ipk" value="{{ $mahasiswa->ipk }}">
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