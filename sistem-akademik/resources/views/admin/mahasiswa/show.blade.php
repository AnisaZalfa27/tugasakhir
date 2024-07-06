<x-layout>
    <x-slot name="page_name">Halaman Prodi / Show</x-slot>
    <x-slot name="page_title"> List Detail data Prodi</x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Ipk</th>
            </tr>
            <tr>
                <td>{{ $mahasiswa->nama }}</td>
                <td>{{ $mahasiswa->tmp_lahir }}</td>
                <td>{{ $mahasiswa->tgl_lahir }}</td>
                <td>{{ $mahasiswa->ipk }}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>