<!-- Start Generation Here -->
<h1 class="text-3xl font-bold mb-5">Daftar Produk Adidas</h1>
<a href="{{ route('adidas.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Produk Adidas</a>
<table class="min-w-full mt-5">
    <thead>
        <tr>
            <th>Gambar</th>
            <th>Jenis Adidas</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Stock</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($adidas as $item)
        <tr>
            <td><img src="{{ asset('img/adidas/'.$item->gambar) }}" alt="{{ $item->jenis_adidas }}" width="100"></td>
            <td>{{ $item->jenis_adidas }}</td>
            <td>{{ $item->deskripsi }}</td>
            <td>{{ number_format($item->harga, 2, ',', '.') }}</td>
            <td>{{ $item->stock }}</td>
            <td>
                <a href="{{ route('adidas.edit', $item->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                <a href="{{ route('adidas.show', $item->id) }}" class="bg-green-500 text-white px-2 py-1 rounded">Lihat</a>
                <form action="{{ route('adidas.destroy', $item->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $adidas->links() }}
<!-- End Generation Here -->
