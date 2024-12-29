<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Camping Land
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100 text-gray-900">
  <header class="flex justify-between items-center p-6 bg-white shadow-md">
   <div class="flex items-center space-x-2">
    <i class="fas fa-map-marker-alt text-blue-500"></i>
    <span class="font-semibold text-2xl text-blue-600">Camping Land</span>
   </div>
   <div class="flex items-center space-x-4">
    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
     Sign in
    </button>
    <i class="fas fa-shopping-cart text-blue-500 text-xl"></i>
   </div>
  </header>
  <main class="p-6">
   <section>
    @if(isset($adidas) && count($adidas) > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($adidas as $item)
            <div class="text-center bg-white rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105">
                <div class="flex justify-center">
                    <img class="rounded-lg mb-2" height="200" width="200" src="{{ asset('img/adidas/'.$item->gambar) }}" alt="{{ $item->jenis_adidas }}"/>
                </div>
                <h2 class="text-xl font-semibold mb-2">{{ $item->jenis_adidas }}</h2>
                <p class="mt-2 font-medium">{{ $item->deskripsi }}</p>
                <p class="text-gray-500 font-semibold">{{ number_format($item->harga, 2, ',', '.') }}</p>
            </div>
            @endforeach
        </div>
    @endif
   </section>

   <section class="mt-8">
    <h2 class="text-xl font-semibold mb-4">Camping Gadgets</h2>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
     <div class="text-center bg-white rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105">
      <img alt="Portable Solar Charger" class="rounded-lg mb-2" height="200" src="https://storage.googleapis.com/a1aa/image/zeeOYWceUyZ7II6ppulmP8vtK7FfyHgUjhwJ3aZ3JTXwfg9fE.jpg" width="200"/>
      <p class="mt-2 font-medium">Portable Solar Charger</p>
      <p class="text-gray-500 font-semibold">$50</p>
     </div>
     <div class="text-center bg-white rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105">
      <img alt="Multi-Function Camping Tool" class="rounded-lg mb-2" height="200" src="https://storage.googleapis.com/a1aa/image/fJWCWlAgQ2Wf2UP1NK98QA89EyzAN3u0tqvzyb5zNc0QIsfnA.jpg" width="200"/>
      <p class="mt-2 font-medium">Multi-Function Camping Tool</p>
      <p class="text-gray-500 font-semibold">$20</p>
     </div>
     <div class="text-center bg-white rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105">
      <img alt="Collapsible Solar Lantern" class="rounded-lg mb-2" height="200" src="https://storage.googleapis.com/a1aa/image/D3H6dw6XYj6nOF3bQgdzXxqdkqrZKFj3EvKQfKZM7VtfHsfnA.jpg" width="200"/>
      <p class="mt-2 font-medium">Collapsible Solar Lantern</p>
      <p class="text-gray-500 font-semibold">$30</p>
     </div>
     <div class="text-center bg-white rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105">
      <img alt="Portable Espresso Maker" class="rounded-lg mb-2" height="200" src="https://storage.googleapis.com/a1aa/image/WjzlWttNYWJZLRqfBpI9JBWMK15bMH9ehwm8EuTVdNn6HsfnA.jpg" width="200"/>
      <p class="mt-2 font-medium">Portable Espresso Maker</p>
      <p class="text-gray-500 font-semibold">$80</p>
     </div>
     <div class="text-center bg-white rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105">
      <img alt="More..." class="rounded-lg mb-2" src="https://placehold.co/200x200"/>
      <p class="mt-2 font-medium">More...</p>
     </div>
    </div>
   </section>
  </main>
  <footer class="text-center py-4 border-t border-gray-200 mt-8">
   <p class="text-gray-600">Homepage</p>
   <p class="text-gray-500">© 2022 Camping Land</p>
  </footer>
 </body>
</html>