<?php

namespace App\Http\Controllers;

use App\Models\Adidas;
use App\Models\Jordan;
use App\Models\Nike;
use App\Models\Puma;
use App\Models\Vans;
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
        $jordan = Jordan::latest()->paginate(10);
        $nike = Nike::latest()->paginate(10);
        $puma = Puma::latest()->paginate(10);
        $vans = Vans::latest()->paginate(10);
        return view('admin.index', compact('adidas', 'jordan', 'nike', 'puma', 'vans'));
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

        $this->createDirectoryIfNotExists('img/adidas');
        $this->createDirectoryIfNotExists('img/jordan');
        $this->createDirectoryIfNotExists('img/nike');
        $this->createDirectoryIfNotExists('img/puma');
        $this->createDirectoryIfNotExists('img/vans');

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
        } elseif ($request->jenis_produk === 'nike') {
            $gambarNike = $request->file('gambar');
            $gambarNameNike = $gambarNike->hashName();
            $gambarNike->move(public_path('img/nike'), $gambarNameNike);

            Nike::create([
                'gambar' => $gambarNameNike,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'stock' => $request->stock,
                'jenis_nike' => $request->jenis_nike,
            ]);
        } elseif ($request->jenis_produk === 'puma') {
            $gambarPuma = $request->file('gambar');
            $gambarNamePuma = $gambarPuma->hashName();
            $gambarPuma->move(public_path('img/puma'), $gambarNamePuma);

            Puma::create([
                'gambar' => $gambarNamePuma,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'stock' => $request->stock,
                'jenis_puma' => $request->jenis_puma,
            ]);
        } elseif ($request->jenis_produk === 'vans') {
            $gambarVans = $request->file('gambar');
            $gambarNameVans = $gambarVans->hashName();
            $gambarVans->move(public_path('img/vans'), $gambarNameVans);

            Vans::create([
                'gambar' => $gambarNameVans,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'stock' => $request->stock,
                'jenis_vans' => $request->jenis_vans,
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
        $jordan = Jordan::latest()->paginate(10);
        return view('deskripsi.jordan', compact('jordan'));
    }

    public function nike(): View
    {
        $nike = Nike::latest()->paginate(10);
        return view('deskripsi.nike', compact('nike'));
    }

    public function puma(): View
    {
        $puma = Puma::latest()->paginate(10);
        return view('deskripsi.puma', compact('puma'));
    }

    public function vans(): View
    {
        $vans = Vans::latest()->paginate(10);
        return view('deskripsi.vans', compact('vans'));
    }

    private function createDirectoryIfNotExists($path)
    {
        if (!file_exists(public_path($path))) {
            mkdir(public_path($path), 0777, true);
        }
    }
}
