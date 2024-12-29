<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Product;
use App\Models\Brand;

class HomeController extends Controller
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

        //render view welcome
        return view('layout.index', compact('brands'));
    }
}
