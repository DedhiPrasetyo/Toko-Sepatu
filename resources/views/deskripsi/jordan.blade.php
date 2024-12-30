@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-5">Deskripsi Produk Jordan</h1>
@foreach($jordans as $item)
    <div>
        <h2>{{ $item->jenis_jordan }}</h2>
        <img src="{{ asset('img/jordan/'.$item->gambar) }}" alt="{{ $item->jenis_jordan }}">
        <p>{{ $item->deskripsi }}</p>
        <p>Harga: {{ number_format($item->harga, 2, ',', '.') }}</p>
        <p>Stock: {{ $item->stock }}</p>
    </div>
@endforeach
@endsection