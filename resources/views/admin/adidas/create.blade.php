<!-- Start Generation Here -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk Adidas</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-5">Tambah Produk Adidas</h1>
        <form action="{{ route('adidas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="jenis_adidas" class="block">Jenis Adidas</label>
                <select name="jenis_adidas" id="jenis_adidas" class="border p-2 w-full" required>
                    <option value="">Pilih Jenis Adidas</option>
                    <option value="Adidas Samba">Adidas Samba</option>
                    <option value="Adidas Stan Smith">Adidas Stan Smith</option>
                    <option value="Adidas NMD R1">Adidas NMD R1</option>
                    <option value="Adidas Gazelle">Adidas Gazelle</option>
                    <option value="Adidas Superstar">Adidas Superstar</option>
                    <option value="Adidas Originals Superstar All Black">Adidas Originals Superstar All Black</option>
                    <option value="Adidas Supernova 3">Adidas Supernova 3</option>
                    <option value="Adidas Yeezy Powerphase">Adidas Yeezy Powerphase</option>
                    <option value="Adidas Ultra Boost">Adidas Ultra Boost</option>
                    <option value="Adidas ZX 750">Adidas ZX 750</option>
                    <option value="Adidas EQT Support">Adidas EQT Support</option>
                    <option value="Adidas Forum">Adidas Forum</option>
                    <option value="Adidas Deerupt">Adidas Deerupt</option>
                    <option value="Adidas Tubular">Adidas Tubular</option>
                    <option value="Adidas AlphaBounce">Adidas AlphaBounce</option>
                    <option value="Adidas Ozweego">Adidas Ozweego</option>
                    <option value="Adidas 4D">Adidas 4D</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500" required>
                @error('gambar')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500" required></textarea>
                @error('deskripsi')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                <input type="number" name="harga" id="harga" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500" required>
                @error('harga')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="stock" class="block text-sm font-medium text-gray-700">Stock</label>
                <input type="number" name="stock" id="stock" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500" required>
                @error('stock')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan Produk Adidas</button>
        </form>
        <a href="{{ route('adidas.index') }}" class="mt-4 inline-block text-blue-500">Kembali ke Daftar Produk</a>
    </div>
</body>
</html>
<!-- End Generation Here -->
