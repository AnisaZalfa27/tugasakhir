<x-layout>
    <x-slot name="page_name">Halaman Rombel/Kelas</x-slot>
    <x-slot name="page_title"> STT Terpadu Nurul Fikri</x-slot>
    <x-slot name="page_content">
        @if (session('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('pesan')}}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <a href="{{ url('dashboard/rombel/create') }}" class="btn btn-primary">+ Tambah mahasiswa</a>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Kode</th>
                <th>Nama</th>
                <th>Tahun Masuk</th>
                <th>Aksi</th>
               
            </tr>
            @foreach ($list_rombel as $rombel)
                <tr>
                    <td>{{ $rombel->kode }}</td>
                    <td>{{ $rombel->nama }}</td>
                    <td>{{ $rombel->thn_masuk }}</td>
                    <td>
                        <a href="{{ url('dashboard/rombel/show', $rombel->id) }}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a> 
                        <a href="{{ url('dashboard/rombel/edit', $rombel->id) }}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a> 
                        <form action="{{ url('dashboard/rombel/destroy', $rombel->id) }}" class="d d-inline" method="post">
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