<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product - SantriKoding.com</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200">

    <div class="container mx-auto mt-10 mb-10">
        <div class="w-full">
            <div class="bg-white border-0 shadow-sm rounded">
                <div class="p-5">
                    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label class="font-bold">GAMBAR</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror border rounded p-2 w-full" name="image">
                            
                            @error('image')
                                <div class="text-red-500 mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="font-bold">JUDUL</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror border rounded p-2 w-full" name="title" value="{{ old('title', $product->title) }}" placeholder="Masukkan Judul Produk">
                            
                            @error('title')
                                <div class="text-red-500 mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="font-bold">DESKRIPSI</label>
                            <textarea class="form-control @error('description') is-invalid @enderror border rounded p-2 w-full" name="description" rows="5" placeholder="Masukkan Deskripsi Produk">{{ old('description', $product->description) }}</textarea>
                            
                            @error('description')
                                <div class="text-red-500 mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="font-bold">HARGA</label>
                            <input type="number" class="form-control @error('price') is-invalid @enderror border rounded p-2 w-full" name="price" value="{{ old('price', $product->price) }}" placeholder="Masukkan Harga Produk">
                            
                            @error('price')
                                <div class="text-red-500 mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="font-bold">STOK</label>
                            <input type="number" class="form-control @error('stock') is-invalid @enderror border rounded p-2 w-full" name="stock" value="{{ old('stock', $product->stock) }}" placeholder="Masukkan Stok Produk">
                            
                            @error('stock')
                                <div class="text-red-500 mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded">UPDATE</button>
                        <button type="reset" class="bg-yellow-500 text-white font-bold py-2 px-4 rounded">RESET</button>

                    </form> 
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>
</body>
</html>
