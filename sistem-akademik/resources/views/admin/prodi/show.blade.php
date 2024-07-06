<x-layout>
    <x-slot name="page_name">Halaman Prodi / Show</x-slot>
    <x-slot name="page_title"> List Detail data Prodi</x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Kode</th>
                <th>Nama</th>
            </tr>
            <tr>
                <td>{{ $prodi->kode }}</td>
                <td>{{ $prodi->nama }}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>