<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk Adidas</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-5">Edit Produk Adidas</h1>
        <form action="{{ route('adidas.update', $adidas->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="jenis_adidas" class="block text-sm font-medium text-gray-700">Jenis Adidas</label>
                <input type="text" name="jenis_adidas" id="jenis_adidas" value="{{ old('jenis_adidas', $adidas->jenis_adidas) }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500" required>
                @error('jenis_adidas')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500">
                @error('gambar')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                <img src="{{ asset('img/adidas/'.$adidas->gambar) }}" alt="{{ $adidas->jenis_adidas }}" width="100" class="mt-2">
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500" required>{{ old('deskripsi', $adidas->deskripsi) }}</textarea>
                @error('deskripsi')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                <input type="number" name="harga" id="harga" value="{{ old('harga', $adidas->harga) }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500" required>
                @error('harga')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="stock" class="block text-sm font-medium text-gray-700">Stock</label>
                <input type="number" name="stock" id="stock" value="{{ old('stock', $adidas->stock) }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500" required>
                @error('stock')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Produk Adidas</button>
        </form>
        <a href="{{ route('adidas.index') }}" class="mt-4 inline-block text-blue-500">Kembali ke Daftar Produk</a>
    </div>
</body>
</html>
