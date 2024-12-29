<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Products - SantriKoding.com</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200">

    <div class="container mx-auto mt-10 mb-10">
        <div class="w-full">
            <div class="bg-white border-0 shadow-sm rounded">
                <div class="p-5">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        
                        @csrf

                        <div class="mb-4">
                            <label class="font-bold">IMAGE</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                            
                            @error('image')
                                <div class="text-red-500 mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="font-bold">TITLE</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Masukkan Judul Product">
                            
                            @error('title')
                                <div class="text-red-500 mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="font-bold">DESCRIPTION</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5" placeholder="Masukkan Description Product">{{ old('description') }}</textarea>
                            
                            @error('description')
                                <div class="text-red-500 mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="flex space-x-4">
                            <div class="w-1/2">
                                <div class="mb-4">
                                    <label class="font-bold">PRICE</label>
                                    <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" placeholder="Masukkan Harga Product">
                                    
                                    @error('price')
                                        <div class="text-red-500 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-1/2">
                                <div class="mb-4">
                                    <label class="font-bold">STOCK</label>
                                    <input type="number" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock') }}" placeholder="Masukkan Stock Product">
                                    
                                    @error('stock')
                                        <div class="text-red-500 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">SAVE</button>
                        <button type="reset" class="bg-yellow-500 text-white px-4 py-2 rounded">RESET</button>

                    </form> 
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
</body>
</html>