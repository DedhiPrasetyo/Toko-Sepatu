<?php

namespace App\Http\Controllers;

use App\Models\Brand; 
use Illuminate\View\View; 
use Illuminate\Http\RedirectResponse; 
use Illuminate\Http\Request; 

class BrandController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get all brands
        $brands = Brand::latest()->paginate(10);

        //render view with brands
        return view('brands.index', compact('brands'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('brands.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama_logo' => 'required|min:3',
        ]);

        //check if directory exists
        if (!file_exists(public_path('img/brands'))) {
            mkdir(public_path('img/brands'), 0777, true);
        }

        //upload logo
        $logo = $request->file('logo');
        $logoName = $logo->hashName();
        $logo->move(public_path('img/brands'), $logoName);

        //create brand
        Brand::create([
            'logo' => $logoName,
            'nama_logo' => $request->nama_logo,
        ]);

        //redirect to index
        return redirect()->route('brands.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get brand by ID
        $brand = Brand::findOrFail($id);

        //render view with brand
        return view('brands.show', compact('brand'));
        return view('layout.index', compact('brand'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get brand by ID
        $brand = Brand::findOrFail($id);

        //render view with brand
        return view('brands.edit', compact('brand'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'logo' => 'image|mimes:jpeg,jpg,png|max:2048',
            'nama_logo' => 'required|min:3',
        ]);

        //get brand by ID
        $brand = Brand::findOrFail($id);

        //check if logo is uploaded
        if ($request->hasFile('logo')) {
            //upload logo
            $logo = $request->file('logo');
            $logoName = $logo->hashName();
            $logo->move(public_path('img/brands'), $logoName);
            $brand->logo = $logoName;
        }

        //update brand
        $brand->nama_logo = $request->nama_logo;
        $brand->save();

        //redirect to index
        return redirect()->route('brands.index')->with(['success' => 'Data Berhasil Diperbarui!']);
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function destroy(string $id): RedirectResponse
    {
        //get brand by ID
        $brand = Brand::findOrFail($id);
        
        //delete logo file if exists
        if (file_exists(public_path('img/brands/' . $brand->logo))) {
            unlink(public_path('img/brands/' . $brand->logo));
        }

        //delete brand
        $brand->delete();

        //redirect to index
        return redirect()->route('brands.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
