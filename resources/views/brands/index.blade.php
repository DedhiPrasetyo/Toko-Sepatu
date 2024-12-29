<!-- Start of Selection -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Brand</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-5">Daftar Brand</h1>
        <a href="{{ route('brands.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Brand</a>
        <table class="min-w-full mt-5">
            <thead>
                <tr>
                    <th>Logo</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($brands as $brand)
                <tr>
                    <td><img src="{{ asset('img/brands/'.$brand->logo) }}" alt="{{ $brand->nama_logo }}" width="100"></td>
                    <td>{{ $brand->nama_logo }}</td>
                    <td>
                        <a href="{{ route('brands.edit', $brand->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                        <a href="{{ route('brands.show', $brand->id) }}" class="bg-green-500 text-white px-2 py-1 rounded">Lihat</a>
                        <form action="{{ route('brands.destroy', $brand->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded" onclick="return confirm('Apakah Anda yakin ingin menghapus brand ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $brands->links() }}
    </div>
</body>
</html> 
<!-- End of Selection -->