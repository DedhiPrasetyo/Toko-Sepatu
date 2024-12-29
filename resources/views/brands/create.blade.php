<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Brand</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-5">Tambah Brand</h1>
        <form action="{{ route('brands.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block">Logo</label>
                <input type="file" name="logo" class="border p-2 w-full">
            </div>
            <div class="mb-4">
                <label class="block">Nama Brand</label>
                <input type="text" name="nama_logo" class="border p-2 w-full">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</body>
</html> 