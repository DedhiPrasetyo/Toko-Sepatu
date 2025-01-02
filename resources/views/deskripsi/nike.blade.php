<!-- resources/views/deskripsi/nike.blade.php -->

<!-- Tambahkan kelas Tailwind untuk membuat tampilan lebih menarik -->
<div class="container mx-auto mt-10">
    <h1 class="text-3xl font-bold mb-5">Nike</h1>

    <!-- Tabel untuk menampilkan data -->
    <table class="min-w-full mt-5">
        <thead>
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Deskripsi</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Looping data menggunakan Blade -->
            @foreach($nike as $item)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $item->id }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $item->nama }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $item->deskripsi }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                    <!-- Tombol Edit -->
                    <a href="{{ route('nike.edit', $item->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600 transition">Edit</a>
                    <!-- Tombol Delete -->
                    <form action="{{ route('nike.destroy', $item->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600 transition" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Tombol Tambah Data -->
    <a href="{{ route('nike.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition mt-4">Tambah Data</a>
</div>