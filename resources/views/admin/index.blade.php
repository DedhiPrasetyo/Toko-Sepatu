<!-- Start Generation Here -->
<div class="bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-5 text-center">Daftar Produk Adidas dan Jordan</h1>
    <div class="flex justify-end mb-4">
        <a href="{{ route('admin.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Tambah Produk</a>
    </div>
    <table class="min-w-full mt-5 border border-gray-300">
        <thead class="bg-gray-200">
            <tr>
                <th class="py-2 px-4 border">Gambar</th>
                <th class="py-2 px-4 border">Jenis Produk</th>
                <th class="py-2 px-4 border">Deskripsi</th>
                <th class="py-2 px-4 border">Harga</th>
                <th class="py-2 px-4 border">Stock</th>
                <th class="py-2 px-4 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($adidas as $item)
            <tr class="hover:bg-gray-100">
                <td class="py-2 px-4 border"><img src="{{ asset('img/adidas/'.$item->gambar) }}" alt="{{ $item->jenis_adidas }}" width="100"></td>
                <td class="py-2 px-4 border">{{ $item->jenis_adidas }}</td>
                <td class="py-2 px-4 border">{{ $item->deskripsi }}</td>
                <td class="py-2 px-4 border">{{ number_format($item->harga, 2, ',', '.') }}</td>
                <td class="py-2 px-4 border">{{ $item->stock }}</td>
                <td class="py-2 px-4 border">
                    <a href="{{ route('admin.edit', $item->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600 transition">Edit</a>
                    <a href="{{ route('admin.show', $item->id) }}" class="bg-green-500 text-white px-2 py-1 rounded hover:bg-green-600 transition">Lihat</a>
                    <form action="{{ route('admin.destroy', $item->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600 transition" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @foreach($jordans as $item)
            <tr class="hover:bg-gray-100">
                <td class="py-2 px-4 border"><img src="{{ asset('img/jordan/'.$item->gambar) }}" alt="{{ $item->jenis_jordan }}" width="100"></td>
                <td class="py-2 px-4 border">{{ $item->jenis_jordan }}</td>
                <td class="py-2 px-4 border">{{ $item->deskripsi }}</td>
                <td class="py-2 px-4 border">{{ number_format($item->harga, 2, ',', '.') }}</td>
                <td class="py-2 px-4 border">{{ $item->stock }}</td>
                <td class="py-2 px-4 border">
                    <a href="{{ route('admin.edit', $item->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600 transition">Edit</a>
                    <a href="{{ route('admin.show', $item->id) }}" class="bg-green-500 text-white px-2 py-1 rounded hover:bg-green-600 transition">Lihat</a>
                    <form action="{{ route('admin.destroy', $item->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600 transition" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        {{ $adidas->links() }}
        {{ $jordans->links() }}
    </div>
</div>
<!-- End Generation Here -->
