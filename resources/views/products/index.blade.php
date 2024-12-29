<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Produk - SantriKoding.com</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto mt-10">
        <div class="text-center mb-6">
            <h3 class="text-3xl font-extrabold text-gray-800">Data Produk</h3>
            <h5 class="text-lg text-blue-600"><a href="https://santrikoding.com">www.santrikoding.com</a></h5>
            <hr class="my-4 border-gray-300">
        </div>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-6">
                <a href="{{ route('products.create') }}" class="inline-block bg-green-600 text-white font-semibold py-2 px-4 rounded-lg mb-4 hover:bg-green-500 transition">TAMBAH PRODUK</a>
                <table class="min-w-full border-collapse border border-gray-200">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="border border-gray-300 p-3 text-left">GAMBAR</th>
                            <th class="border border-gray-300 p-3 text-left">JUDUL</th>
                            <th class="border border-gray-300 p-3 text-left">HARGA</th>
                            <th class="border border-gray-300 p-3 text-left">STOK</th>
                            <th class="border border-gray-300 p-3 text-left">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr class="hover:bg-gray-100">
                                <td class="border border-gray-300 text-center p-3">
                                    <img src="{{ asset('img/produk/'.$product->image) }}" class="rounded-lg" style="width: 150px">
                                </td>
                                <td class="border border-gray-300 p-3">{{ $product->title }}</td>
                                <td class="border border-gray-300 p-3">{{ "Rp " . number_format($product->price,2,',','.') }}</td>
                                <td class="border border-gray-300 p-3">{{ $product->stock }}</td>
                                <td class="border border-gray-300 text-center p-3">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('products.destroy', $product->id) }}" method="POST">
                                        <a href="{{ route('products.show', $product->id) }}" class="inline-block bg-gray-800 text-white font-semibold py-1 px-3 rounded hover:bg-gray-700 transition">LIHAT</a>
                                        <a href="{{ route('products.edit', $product->id) }}" class="inline-block bg-blue-500 text-white font-semibold py-1 px-3 rounded hover:bg-blue-400 transition">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-block bg-red-500 text-white font-semibold py-1 px-3 rounded hover:bg-red-400 transition">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="border border-gray-300 text-center p-3 text-red-500">
                                    Data Produk belum Tersedia.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $products->links() }}
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        //message with sweetalert
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif

    </script>

</body>
</html>