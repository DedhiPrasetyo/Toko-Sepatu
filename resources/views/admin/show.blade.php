<!-- Start Generation Here -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-5">Detail Produk</h1>
        <div class="bg-white p-5 rounded shadow">
            @if($produk->jenis_produk == 'adidas')
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Jenis Adidas</label>
                <p class="mt-1 text-gray-900">{{ $produk->jenis_adidas }}</p>
            </div>
            @elseif($produk->jenis_produk == 'jordan')
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Jenis Jordan</label>
                <p class="mt-1 text-gray-900">{{ $produk->jenis_jordan }}</p>
            </div>
            @elseif($produk->jenis_produk == 'nike')
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Jenis Nike</label>
                <p class="mt-1 text-gray-900">{{ $produk->jenis_nike }}</p>
            </div>
            @elseif($produk->jenis_produk == 'vans')
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Jenis Vans</label>
                <p class="mt-1 text-gray-900">{{ $produk->jenis_vans }}</p>
            </div>
            @elseif($produk->jenis_produk == 'puma')
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Jenis Puma</label>
                <p class="mt-1 text-gray-900">{{ $produk->jenis_puma }}</p>
            </div>
            @endif
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Gambar</label>
                <img src="{{ asset('img/'.$produk->jenis_produk.'/'.$produk->gambar) }}" alt="{{ $produk->jenis }}" width="100" class="mt-2">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <p class="mt-1 text-gray-900">{{ $produk->deskripsi }}</p>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Harga</label>
                <p class="mt-1 text-gray-900">{{ number_format($produk->harga, 2, ',', '.') }}</p>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Stock</label>
                <p class="mt-1 text-gray-900">{{ $produk->stock }}</p>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.edit', $produk->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                <form action="{{ route('admin.destroy', $produk->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                </form>
                <a href="{{ route('admin.index') }}" class="mt-4 inline-block text-blue-500">Kembali ke Daftar Produk</a>
            </div>
        </div>
    </div>
</body>
</html>
<!-- End Generation Here -->
