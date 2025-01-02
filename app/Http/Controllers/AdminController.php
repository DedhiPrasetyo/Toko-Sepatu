<?php

namespace App\Http\Controllers;

use App\Models\Adidas;
use App\Models\Jordan;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $adidas = Adidas::latest()->paginate(10);
        $jordans = Jordan::latest()->paginate(10);
        return view('admin.index', compact('adidas', 'jordans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'jenis_produk' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'deskripsi' => 'required|min:5',
            'harga' => 'required|numeric',
            'stock' => 'required|numeric',
        ]);

        if (!file_exists(public_path('img/adidas'))) {
            mkdir(public_path('img/adidas'), 0777, true);
        }

        if (!file_exists(public_path('img/jordan'))) {
            mkdir(public_path('img/jordan'), 0777, true);
        }

        // Simpan berdasarkan jenis produk
        if ($request->jenis_produk === 'adidas') {
            $gambarAdidas = $request->file('gambar');
            $gambarNameAdidas = $gambarAdidas->hashName();
            $gambarAdidas->move(public_path('img/adidas'), $gambarNameAdidas);

            Adidas::create([
                'gambar' => $gambarNameAdidas,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'stock' => $request->stock,
                'jenis_adidas' => $request->jenis_adidas,
            ]);
        } elseif ($request->jenis_produk === 'jordan') {
            $gambarJordan = $request->file('gambar');
            $gambarNameJordan = $gambarJordan->hashName();
            $gambarJordan->move(public_path('img/jordan'), $gambarNameJordan);

            Jordan::create([
                'gambar' => $gambarNameJordan,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'stock' => $request->stock,
                'jenis_jordan' => $request->jenis_jordan,
            ]);
        }

        return redirect()->route('admin.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $adidas = Adidas::findOrFail($id);
        return view('admin.show', compact('adidas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $adidas = Adidas::findOrFail($id);
        return view('admin.edit', compact('adidas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'jenis_adidas' => 'required|string|min:3',
            'gambar' => 'image|mimes:jpeg,jpg,png|max:2048',
            'deskripsi' => 'required|min:5',
            'harga' => 'required|numeric',
            'stock' => 'required|numeric',
        ]);

        $adidas = Adidas::findOrFail($id);
        $adidas->jenis_adidas = $request->jenis_adidas;
        $adidas->deskripsi = $request->deskripsi;
        $adidas->harga = $request->harga;
        $adidas->stock = $request->stock;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = $gambar->hashName();
            $gambar->move(public_path('img/adidas'), $gambarName);
            $adidas->gambar = $gambarName;
        }

        $adidas->save();

        return redirect()->route('admin.index')->with('success', 'Produk berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $adidas = Adidas::findOrFail($id);
        $adidas->delete();

        return redirect()->route('admin.index')->with('success', 'Produk berhasil dihapus.');
    }

    public function adidas(): View
    {
        $adidas = Adidas::latest()->paginate(10);
        return view('deskripsi.adidas', compact('adidas'));
    }

    public function jordan(): View
    {
        $jordans = Jordan::latest()->paginate(10);
        return view('admin.jordan', compact('jordans'));
    }

    private function createDirectoryIfNotExists($path)
    {
        if (!file_exists(public_path($path))) {
            mkdir(public_path($path), 0777, true);
        }
    }
}
