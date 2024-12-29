<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DeskripsiController extends Controller
{
    public function adidas():View{
        return view('deskripsi.adidas');
    }
    public function jordan():View{
        return view('deskripsi.jordan');
    }
    public function nike():View{
        return view('deskripsi.nike');
    }
    public function puma():View{
        return view('deskripsi.puma');
    }
    public function vans():View{
        return view('deskripsi.vans');
    }
}
