<!-- Start Generation Here -->
<div class="bg-white shadow-lg rounded-lg p-6 md:p-8">
    <h1 class="text-4xl font-bold mb-6 text-center text-blue-700">Daftar Produk Adidas dan Jordan</h1>
    <div class="flex justify-end mb-6">
        <a href="{{ route('admin.create') }}" class="bg-blue-700 text-white px-5 py-2 rounded-lg hover:bg-blue-800 transition duration-300">Tambah Produk</a>
    </div>

    <h2 class="text-3xl font-semibold mb-4 text-gray-800">Produk Adidas</h2>
    @php
        $groupedAdidas = $adidas->groupBy('jenis_adidas');
    @endphp
    @foreach($groupedAdidas as $jenis => $items)
        <h3 class="text-2xl font-medium mt-4 text-gray-700">{{ $jenis }}</h3>
        <div class="overflow-x-auto">
            <table class="min-w-full mt-2 border border-gray-300 rounded-lg">
                <thead class="bg-gray-300">
                    <tr>
                        <th class="py-4 px-3 border">Gambar</th>
                        <th class="py-4 px-3 border">Deskripsi</th>
                        <th class="py-4 px-3 border">Harga</th>
                        <th class="py-4 px-3 border">Stock</th>
                        <th class="py-4 px-3 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                    <tr class="hover:bg-gray-100 transition duration-200">
                        <td class="py-3 px-3 border"><img src="{{ asset('img/adidas/'.$item->gambar) }}" alt="{{ $item->jenis_adidas }}" class="w-24 h-24 object-cover"></td>
                        <td class="py-3 px-3 border">{{ $item->deskripsi }}</td>
                        <td class="py-3 px-3 border">Rp {{ number_format($item->harga, 2, ',', '.') }}</td>
                        <td class="py-3 px-3 border">{{ $item->stock }}</td>
                        <td class="py-3 px-3 border">
                            <a href="{{ route('admin.edit', $item->id) }}" class="bg-yellow-600 text-white px-3 py-1 rounded hover:bg-yellow-700 transition duration-300">Edit</a>
                            <a href="{{ route('admin.show', $item->id) }}" class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700 transition duration-300">Lihat</a>
                            <form action="{{ route('admin.destroy', $item->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition duration-300" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endforeach

    <h2 class="text-3xl font-semibold mb-4 mt-8 text-gray-800">Produk Jordan</h2>
    @php
        $groupedJordans = $jordans->groupBy('jenis_jordan');
    @endphp
    @foreach($groupedJordans as $jenis => $items)
        <h3 class="text-2xl font-medium mt-4 text-gray-700">{{ $jenis }}</h3>
        <div class="overflow-x-auto">
            <table class="min-w-full mt-2 border border-gray-300 rounded-lg">
                <thead class="bg-gray-300">
                    <tr>
                        <th class="py-4 px-3 border">Gambar</th>
                        <th class="py-4 px-3 border">Deskripsi</th>
                        <th class="py-4 px-3 border">Harga</th>
                        <th class="py-4 px-3 border">Stock</th>
                        <th class="py-4 px-3 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                    <tr class="hover:bg-gray-100 transition duration-200">
                        <td class="py-3 px-3 border"><img src="{{ asset('img/jordan/'.$item->gambar) }}" alt="{{ $item->jenis_jordan }}" class="w-24 h-24 object-cover"></td>
                        <td class="py-3 px-3 border">{{ $item->deskripsi }}</td>
                        <td class="py-3 px-3 border">Rp {{ number_format($item->harga, 2, ',', '.') }}</td>
                        <td class="py-3 px-3 border">{{ $item->stock }}</td>
                        <td class="py-3 px-3 border">
                            <a href="{{ route('admin.edit', $item->id) }}" class="bg-yellow-600 text-white px-3 py-1 rounded hover:bg-yellow-700 transition duration-300">Edit</a>
                            <a href="{{ route('admin.show', $item->id) }}" class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700 transition duration-300">Lihat</a>
                            <form action="{{ route('admin.destroy', $item->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition duration-300" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endforeach

    <div class="mt-6">
        {{ $adidas->links() }}
        {{ $jordans->links() }}
    </div>
</div>
<!-- End Generation Here -->
