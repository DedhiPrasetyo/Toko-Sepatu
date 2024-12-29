@include('layout.header') <!-- Include Header -->
@vite('resources/css/app.css')
<main class="pt-20">
    <div class="flex flex-col items-center text-center py-10 px-4 md:py-20 bg-cover bg-center" style="background-image: url('https://cdn.usegalileo.ai/sdxl10/4e80e8ba-95e8-417f-9975-e70146dd7081.png');">
        <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight mb-4">
            <span class="bg-gradient-to-r from-blue-500 to-blue-600 bg-clip-text text-transparent">Toko</span>
            <span class="bg-gradient-to-r from-green-500 to-green-600 bg-clip-text text-transparent">Sepatu</span>
        </h1>
        <p class="text-white text-base md:text-lg mb-6">Our AI copilot helps you reduce emissions effortlessly across industries</p>
       
    </div>

    <!-- Benefits Section -->
    <section class="py-10 px-4 md:py-16">
        <div class="text-center mb-8">
            <h2 class="text-2xl md:text-4xl font-bold text-gray-800">Benefits</h2>
            <p class="text-gray-600 mt-4">Our AI copilot helps you reduce emissions effortlessly across industries</p>
        </div>
        <button class="mx-auto bg-blue-600 text-white px-6 py-3 rounded-lg text-sm font-bold">Get a demo</button>
    </section>

    <!-- Trusted Companies -->
        <h3 class="text-center text-xl md:text-2xl font-bold text-gray-800 mb-6">Trusted by leading companies</h3>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 px-4">
            @foreach ($brands as $brand)
                <a href="{{ url('deskripsi/' . strtolower($brand->nama_logo)) }}">
                    <div class="aspect-square bg-cover rounded-lg border-4 border-blue-500 shadow-lg transition-all hover:shadow-2xl hover:border-green-500 border-4 hover:-translate-y-[1px] flex flex-col items-center justify-center">
                        <img src="{{ asset('img/brands/'.$brand->logo) }}" alt="{{ $brand->nama_logo }}" class="h-32 w-32 object-contain">
                        <p class="mt-2 text-center font-semibold text-gray-700">{{ $brand->nama_logo }}</p>
                    </div>
                </a>
            @endforeach
        </div>
</main>

{{-- @include('landing.footer') <!-- Include Footer --> --}}
