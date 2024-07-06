<x-layout>
    <x-slot name="page_name">Halaman Rombel / Show</x-slot>
    <x-slot name="page_title"> List Detail data Rombel</x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Kode</th>
                <th>Nama</th>
                <th>Tahun Masuk</th>
            </tr>
            <tr>
                <td>{{ $rombel->kode }}</td>
                <td>{{ $rombel->nama }}</td>
                <td>{{ $rombel->thn_masuk }}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>