<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800"
    />

    <title>Galileo Design</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <div class="relative flex flex-col min-h-screen bg-white overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
      <div class="layout-container flex flex-col flex-1">
        <div class="flex flex-1 justify-center py-4 px-4 md:px-10"> <!-- Responsif padding -->
          <div class="layout-content-container flex flex-col max-w-[1200px] flex-1"> 
            
            @foreach(['Air Jordan 1', 'Air Jordan 2', 'Air Jordan 3', 'Air Jordan 4', 'Air Jordan 5', 'Air Jordan 6', 'Air Jordan 7', 'Air Jordan 8', 'Air Jordan 9', 'Air Jordan 10', 'Air Jordan 11', 'Air Jordan 12', 'Air Jordan 13', 'Air Jordan 14', 'Air Jordan 15', 'Air Jordan 16', 'Air Jordan 17', 'Air Jordan 18', 'Air Jordan 19', 'Air Jordan 20', 'Air Jordan 21', 'Air Jordan 22', 'Air Jordan 23', 'Air Jordan 24', 'Air Jordan 25', 'Air Jordan 26', 'Air Jordan 27', 'Air Jordan 28', 'Air Jordan 29', 'Air Jordan 30', 'Air Jordan 31', 'Air Jordan 32', 'Air Jordan 33', 'Air Jordan 34', 'Air Jordan 35', 'Air Jordan 36', 'Air Jordan 37', 'Air Jordan Low', 'Air Jordan Retro', 'Air Jordan Ultra'] as $jenis)
                @php $hasData = false; @endphp
                @foreach($jordan as $item)
                    @if($item->jenis_jordan === $jenis)
                        @php $hasData = true; @endphp
                        @break
                    @endif
                @endforeach
                @if($hasData)
                    <h2 class="text-[#111318] text-2xl font-extrabold leading-tight tracking-tight px-4 pb-4">{{ $jenis }}</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4"> <!-- Responsif grid -->
                    @foreach($jordan as $item)
                        @if($item->jenis_jordan === $jenis)
                            <div class="flex flex-col gap-2 pb-6 border border-gray-300 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-xl">
                                <div class="flex justify-center">
                                    <img src="{{ asset('img/jordan/'.$item->gambar) }}" alt="{{ $item->jenis_jordan }}" class="w-full h-64 object-cover transition-transform duration-300 transform hover:scale-110"> <!-- Tinggi gambar disesuaikan -->
                                </div>
                                <div class="p-4 bg-gray-50"> <!-- Meningkatkan padding dalam div -->
                                    <h3 class="text-[#111318] text-md font-semibold leading-normal">{{ $item->jenis_jordan }}</h3>
                                    <p class="text-[#636f88] text-xs font-normal leading-normal">{{ $item->deskripsi }}</p>
                                    <p class="text-[#111318] text-base font-bold leading-normal mt-1">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    </div>
                @endif
            @endforeach

             
      </div>
    </div>
  </body>
</html>
