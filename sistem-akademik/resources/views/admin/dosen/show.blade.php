<x-layout>
    <x-slot name="page_name">Halaman Dosen / Show</x-slot>
    <x-slot name="page_title"> List Detail data Dosen</x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
            </tr>
            <tr>
                <td>{{ $dosen->nama }}</td>
                <td>{{ $dosen->tmp_lahir }}</td>
                <td>{{ $dosen->tgl_lahir }}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>