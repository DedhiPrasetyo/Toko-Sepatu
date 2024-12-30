<!-- Start Generation Here -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-5">Tambah Produk</h1>
        <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="jenis_produk" class="block text-sm font-medium text-gray-700">Pilih Jenis Produk</label>
                <select name="jenis_produk" id="jenis_produk" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500" required>
                    <option value="" disabled selected>Pilih...</option>
                    <option value="adidas">Adidas</option>
                    <option value="jordan">Jordan</option>
                </select>
            </div>
            <div class="mb-4" id="adidas_fields" style="display: none;">
                <label for="jenis_adidas" class="block text-sm font-medium text-gray-700">Jenis Adidas</label>
                <select name="jenis_adidas" id="jenis_adidas" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500">
                    <option value="" disabled selected>Pilih...</option>
                    <option value="Adidas Samba">Adidas Samba</option>
                    <option value="Adidas Stan Smith">Adidas Stan Smith</option>
                    <option value="Adidas NMD R1">Adidas NMD R1</option>
                    <option value="Adidas Gazelle">Adidas Gazelle</option>
                    <option value="Adidas Superstar">Adidas Superstar</option>
                    <option value="Adidas Originals Superstar All Black">Adidas Originals Superstar All Black</option>
                    <option value="Adidas Supernova 3">Adidas Supernova 3</option>
                    <option value="Adidas Yeezy Powerphase">Adidas Yeezy Powerphase</option>
                    <option value="Adidas Ultraboost">Adidas Ultraboost</option>
                    <option value="Adidas ZX 8000">Adidas ZX 8000</option>
                    <option value="Adidas Adizero Adios Pro">Adidas Adizero Adios Pro</option>
                    <option value="Adidas Forum Low">Adidas Forum Low</option>
                    <option value="Adidas Terrex Free Hiker">Adidas Terrex Free Hiker</option>
                    <option value="Adidas Crazy Explosive">Adidas Crazy Explosive</option>
                    <option value="Adidas 4D Run">Adidas 4D Run</option>
                    <option value="Adidas Adilette Slides">Adidas Adilette Slides</option>
                    <option value="Adidas Copa Mundial">Adidas Copa Mundial</option>
                    <option value="Adidas Predator Freak">Adidas Predator Freak</option>
                    <option value="Adidas AlphaEdge 4D">Adidas AlphaEdge 4D</option>
                    <option value="Adidas SolarBoost">Adidas SolarBoost</option>
                </select>
                @error('jenis_adidas')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4" id="jordan_fields" style="display: none;">
                <label for="jenis_jordan" class="block text-sm font-medium text-gray-700">Jenis Jordan</label>
                <input type="text" name="jenis_jordan" id="jenis_jordan" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500">
                @error('jenis_jordan')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
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
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan Produk</button>
        </form>
        <a href="{{ route('admin.index') }}" class="mt-4 inline-block text-blue-500">Kembali ke Daftar Produk</a>
    </div>

    <script>
        document.getElementById('jenis_produk').addEventListener('change', function() {
            var adidasFields = document.getElementById('adidas_fields');
            var jordanFields = document.getElementById('jordan_fields');
            if (this.value === 'adidas') {
                adidasFields.style.display = 'block';
                jordanFields.style.display = 'none';
            } else if (this.value === 'jordan') {
                jordanFields.style.display = 'block';
                adidasFields.style.display = 'none';
            } else {
                adidasFields.style.display = 'none';
                jordanFields.style.display = 'none';
            }
        });
    </script>
</body>
</html>
<!-- End Generation Here -->
