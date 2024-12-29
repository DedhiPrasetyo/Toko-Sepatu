<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3 class="text-center mb-4">DAFTAR PRODUK</h3>
                        
                        <div class="row">
                            @forelse ($products as $product)
                                <div class="col-md-4 mb-4">
                                    <div class="card">
                                        <img src="{{ asset('img/produk/'.$product->image) }}" class="card-img-top" alt="{{ $product->title }}" style="height: 200px; object-fit: cover;">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $product->title }}</h5>
                                            <p class="card-text">{!! Str::limit($product->description, 100) !!}</p>
                                            <p class="card-text">
                                                <strong>Harga:</strong> Rp {{ number_format($product->price, 0, ',', '.') }}<br>
                                                <strong>Stok:</strong> {{ $product->stock }}
                                            </p>
                                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-primary">LIHAT DETAIL</a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-md-12">
                                    <div class="alert alert-warning">
                                        Data Produk belum tersedia.
                                    </div>
                                </div>
                            @endforelse
                        </div>
                        
                        <div class="d-flex justify-content-center mt-4">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
