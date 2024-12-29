<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Brand</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-5">Detail Brand</h1>
        <img src="{{ asset('img/brands/'.$brand->logo) }}" alt="{{ $brand->nama_logo }}" width="200">
        <h2 class="text-2xl mt-5">{{ $brand->nama_logo }}</h2>
    </div>
</body>
</html> 