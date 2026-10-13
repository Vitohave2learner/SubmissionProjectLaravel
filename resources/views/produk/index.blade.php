@extends('app')

@section('title', 'Daftar Produk Lengkap')

@section('content')
<h1>Daftar Produk</h1>

<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($produk as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p['nama'] }}</td>
                <td>Rp {{ number_format($p['harga'], 0, ',', '.') }}</td>
                <td>
                    @if ($p['stok'] > 10)
                        Aman
                    @elseif ($p['stok'] > 0)
                        Menipis
                    @else
                        Habis
                    @endif
                </td>
                <td>
                    <a href="{{ route('produk.show', $p['id']) }}">Detail</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada produk.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection