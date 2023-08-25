<?php

namespace App\Http\Controllers;

use App\Models\AdicionarDados;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function dashboard_home()
    {
        return view('dashboard.index');
    }

    public function dashboard_edit()
    {
        return view('dashboard.edit');
    }

    public function dashboard_endereco()
    {
        return view('dashboard.endereco');
    }


    public function about()
    {
        $socialMedia = AdicionarDados::all();
        $socialMedia = $socialMedia->sortByDesc('created_at');
        return view('about', compact('socialMedia'));
    }

    public function footer()
    {
        $socialMedia = AdicionarDados::all();
        $socialMedia = $socialMedia->sortByDesc('created_at');



        return view('components.footer', compact('socialMedia'));
    }

    public function index()
    {
        $produtos = Product::latest('created_at')->take(6)->get();

        return view('home', compact('produtos',));
    }
}
