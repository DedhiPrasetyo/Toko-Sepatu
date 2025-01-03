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
                    <option value="nike">Nike</option>
                    <option value="vans">Vans</option>
                    <option value="puma">Puma</option>
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
                <select name="jenis_jordan" id="jenis_jordan" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500">
                    <option value="" disabled selected>Pilih...</option>
                    <option value="Air Jordan 1">Air Jordan 1</option>
                    <option value="Air Jordan 2">Air Jordan 2</option>
                    <option value="Air Jordan 3">Air Jordan 3</option>
                    <option value="Air Jordan 4">Air Jordan 4</option>
                    <option value="Air Jordan 5">Air Jordan 5</option>
                    <option value="Air Jordan 6">Air Jordan 6</option>
                    <option value="Air Jordan 7">Air Jordan 7</option>
                    <option value="Air Jordan 8">Air Jordan 8</option>
                    <option value="Air Jordan 9">Air Jordan 9</option>
                    <option value="Air Jordan 10">Air Jordan 10</option>
                    <option value="Air Jordan 11">Air Jordan 11</option>
                    <option value="Air Jordan 12">Air Jordan 12</option>
                    <option value="Air Jordan 13">Air Jordan 13</option>
                    <option value="Air Jordan 14">Air Jordan 14</option>
                    <option value="Air Jordan 15">Air Jordan 15</option>
                    <option value="Air Jordan 16">Air Jordan 16</option>
                    <option value="Air Jordan 17">Air Jordan 17</option>
                    <option value="Air Jordan 18">Air Jordan 18</option>
                    <option value="Air Jordan 19">Air Jordan 19</option>
                    <option value="Air Jordan 20">Air Jordan 20</option>
                    <option value="Air Jordan 21">Air Jordan 21</option>
                    <option value="Air Jordan 22">Air Jordan 22</option>
                    <option value="Air Jordan 23">Air Jordan 23</option>
                    <option value="Air Jordan 24">Air Jordan 24</option>
                    <option value="Air Jordan 25">Air Jordan 25</option>
                    <option value="Air Jordan 26">Air Jordan 26</option>
                    <option value="Air Jordan 27">Air Jordan 27</option>
                    <option value="Air Jordan 28">Air Jordan 28</option>
                    <option value="Air Jordan 29">Air Jordan 29</option>
                    <option value="Air Jordan 30">Air Jordan 30</option>
                    <option value="Air Jordan 31">Air Jordan 31</option>
                    <option value="Air Jordan 32">Air Jordan 32</option>
                    <option value="Air Jordan 33">Air Jordan 33</option>
                    <option value="Air Jordan 34">Air Jordan 34</option>
                    <option value="Air Jordan 35">Air Jordan 35</option>
                    <option value="Air Jordan 36">Air Jordan 36</option>
                    <option value="Air Jordan 37">Air Jordan 37</option>
                    <option value="Air Jordan Low">Air Jordan Low</option>
                    <option value="Air Jordan Retro">Air Jordan Retro</option>
                    <option value="Air Jordan Ultra">Air Jordan Ultra</option>
                </select>
                @error('jenis_jordan')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4" id="nike_fields" style="display: none;">
                <label for="jenis_nike" class="block text-sm font-medium text-gray-700">Jenis Nike</label>
                <select name="jenis_nike" id="jenis_nike" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500">
                    <option value="" disabled selected>Pilih...</option>
                    <option value="Nike Air Max">Nike Air Max</option>
                    <option value="Nike Air Force 1">Nike Air Force 1</option>
                    <option value="Nike Air Jordan">Nike Air Jordan</option>
                    <option value="Nike Zoom">Nike Zoom</option>
                    <option value="Nike React">Nike React</option>
                    <option value="Nike Free">Nike Free</option>
                    <option value="Nike VaporMax">Nike VaporMax</option>
                    <option value="Nike Pegasus">Nike Pegasus</option>
                    <option value="Nike SB Dunk">Nike SB Dunk</option>
                    <option value="Nike Blazer">Nike Blazer</option>
                    <option value="Nike Running Shoes">Nike Running Shoes</option>
                    <option value="Nike Flex">Nike Flex</option>
                    <option value="Nike Hyperdunk">Nike Hyperdunk</option>
                    <option value="Nike Zoom Freak">Nike Zoom Freak</option>
                    <option value="Nike Kyrie">Nike Kyrie</option>
                    <option value="Nike LeBron">Nike LeBron</option>
                    <option value="Nike KD">Nike KD</option>
                    <option value="Nike Giannis">Nike Giannis</option>
                    <option value="Nike Tiempo">Nike Tiempo</option>
                    <option value="Nike Mercurial">Nike Mercurial</option>
                    <option value="Nike Phantom">Nike Phantom</option>
                    <option value="Nike Cortez">Nike Cortez</option>
                    <option value="Nike T90">Nike T90</option>
                    <option value="Nike Zoom Fly">Nike Zoom Fly</option>
                    <option value="Nike Running React Infinity">Nike Running React Infinity</option>
                    <option value="Nike Zoom Streak">Nike Zoom Streak</option>
                    <option value="Nike Metcon">Nike Metcon</option>
                    <option value="Nike Air Zoom Structure">Nike Air Zoom Structure</option>
                    <option value="Nike Free RN">Nike Free RN</option>
                    <option value="Nike Air Zoom Pegasus">Nike Air Zoom Pegasus</option>
                </select>
                @error('jenis_nike')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4" id="vans_fields" style="display: none;">
                <label for="jenis_vans" class="block text-sm font-medium text-gray-700">Jenis Vans</label>
                <select name="jenis_vans" id="jenis_vans" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500">
                    <option value="" disabled selected>Pilih...</option>
                    <option value="Vans Old Skool">Vans Old Skool</option>
                    <option value="Vans Authentic">Vans Authentic</option>
                    <option value="Vans Slip-On">Vans Slip-On</option>
                    <option value="Vans Era">Vans Era</option>
                    <option value="Vans Sk8-Hi">Vans Sk8-Hi</option>
                    <option value="Vans Style 36">Vans Style 36</option>
                    <option value="Vans Half Cab">Vans Half Cab</option>
                    <option value="Vans Rowley">Vans Rowley</option>
                    <option value="Vans TNT">Vans TNT</option>
                    <option value="Vans AVE Pro">Vans AVE Pro</option>
                </select>
                @error('jenis_vans')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4" id="puma_fields" style="display: none;">
                <label for="jenis_puma" class="block text-sm font-medium text-gray-700">Jenis Puma</label>
                <select name="jenis_puma" id="jenis_puma" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500">
                    <option value="" disabled selected>Pilih...</option>
                    <option value="Puma Suede">Puma Suede</option>
                    <option value="Puma RS-X">Puma RS-X</option>
                    <option value="Puma Future Rider">Puma Future Rider</option>
                    <option value="Puma Cali">Puma Cali</option>
                    <option value="Puma Clyde">Puma Clyde</option>
                    <option value="Puma Roma">Puma Roma</option>
                    <option value="Puma Cell">Puma Cell</option>
                    <option value="Puma Mayze">Puma Mayze</option>
                    <option value="Puma Wild Rider">Puma Wild Rider</option>
                    <option value="Puma Slipstream">Puma Slipstream</option>
                </select>
                @error('jenis_puma')
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
            var nikeFields = document.getElementById('nike_fields');
            var vansFields = document.getElementById('vans_fields');
            var pumaFields = document.getElementById('puma_fields');
            
            // Sembunyikan semua field terlebih dahulu
            adidasFields.style.display = 'none';
            jordanFields.style.display = 'none';
            nikeFields.style.display = 'none';
            vansFields.style.display = 'none';
            pumaFields.style.display = 'none';
            
            // Tampilkan field sesuai pilihan
            if (this.value === 'adidas') {
                adidasFields.style.display = 'block';
            } else if (this.value === 'jordan') {
                jordanFields.style.display = 'block';
            } else if (this.value === 'nike') {
                nikeFields.style.display = 'block';
            } else if (this.value === 'vans') {
                vansFields.style.display = 'block';
            } else if (this.value === 'puma') {
                pumaFields.style.display = 'block';
            }
        });
    </script>
</body>
</html>
<!-- End Generation Here -->
