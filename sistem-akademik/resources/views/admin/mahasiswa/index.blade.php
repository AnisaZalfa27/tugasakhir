<x-layout>
    <x-slot name="page_name">Halaman Mahasiswa</x-slot>
    <x-slot name="page_title"> List Data Mahasiswa</x-slot>
    <x-slot name="page_content">
        @if (session('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('pesan')}}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <a href="{{ url('dashboard/mahasiswa/create') }}" class="btn btn-primary">+ Tambah mahasiswa</a>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Ipk</th>
                <th>Aksi</th>
               
            </tr>
            @foreach ($list_mahasiswa as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->tmp_lahir }}</td>
                    <td>{{ $mahasiswa->tgl_lahir }}</td>
                    <td>{{ $mahasiswa->ipk }}</td>
                    <td>
                        <a href="{{ url('dashboard/mahasiswa/show', $mahasiswa->id) }}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a> 
                        <a href="{{ url('dashboard/mahasiswa/edit', $mahasiswa->id) }}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a> 
                        <form action="{{ url('dashboard/mahasiswa/destroy', $mahasiswa->id) }}" class="d d-inline" method="post">
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