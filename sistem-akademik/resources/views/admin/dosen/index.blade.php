<x-layout>
    <x-slot name="page_name">Halaman Dosen</x-slot>
    <x-slot name="page_title"> List Data Dosen</x-slot>
    <x-slot name="page_content">
        @if (session('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('pesan')}}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <a href="{{ url('dashboard/dosen/create') }}" class="btn btn-primary">+ Tambah mahasiswa</a>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
               
            </tr>
            @foreach ($list_dosen as $dosen)
                <tr>
                    <td>{{ $dosen->nama }}</td>
                    <td>{{ $dosen->tmp_lahir }}</td>
                    <td>{{ $dosen->tgl_lahir }}</td>
                    <td>
                        <a href="{{ url('dashboard/dosen/show', $dosen->id) }}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a> 
                        <a href="{{ url('dashboard/dosen/edit', $dosen->id) }}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a> 
                        <form action="{{ url('dashboard/dosen/destroy', $dosen->id) }}" class="d d-inline" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapus data?')"><i class="far fa-trash-alt"></i>Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </x-slot>
</x-layout>