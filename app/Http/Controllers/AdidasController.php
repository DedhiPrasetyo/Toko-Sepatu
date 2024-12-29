<?php

namespace App\Http\Controllers;

use App\Models\adidas;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdidasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $adidas = adidas::latest()->paginate(10);
        return view('admin.adidas.index', compact('adidas'));
        return view('deskripsi.adidas', compact('adidas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.adidas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'deskripsi' => 'required|min:5',
            'harga' => 'required|numeric',
            'stock' => 'required|numeric',
            'jenis_adidas' => 'required|string',
        ]);

        if (!file_exists(public_path('img/adidas'))) {
            mkdir(public_path('img/adidas'), 0777, true);
        }

        $gambar = $request->file('gambar');
        $gambarName = $gambar->hashName();
        $gambar->move(public_path('img/adidas'), $gambarName);

        adidas::create([
            'gambar' => $gambarName,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stock' => $request->stock,
            'jenis_adidas' => $request->jenis_adidas,
        ]);

        return redirect()->route('adidas.index')->with('success', 'Adidas created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $adidas = adidas::find($id);
        if (!$adidas) {
            abort(404);
        }
        return view('admin.adidas.show', compact('adidas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $adidas = adidas::findOrFail($id);
        return view('admin.adidas.edit', compact('adidas'));
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

        $adidas = adidas::findOrFail($id);
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

        return redirect()->route('adidas.index')->with('success', 'Adidas updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $adidas = adidas::findOrFail($id);
        $adidas->delete();

        return redirect()->route('adidas.index')->with('success', 'Adidas deleted successfully.');
    }

    /**
     * Display the description of the Adidas products.
     */
    public function deskripsi(): View
    {
        $adidas = adidas::all(); // Mengambil semua data dari tabel adidas
        return view('deskripsi.adidas', compact('adidas')); // Mengirim data ke view deskripsi.adidas
    }
}
