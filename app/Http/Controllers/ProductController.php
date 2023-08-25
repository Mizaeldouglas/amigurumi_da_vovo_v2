<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Product::latest('created_at')->get();

        return view('amigurumis', compact('produtos'));
    }

    public function detalhes ($id)
    {
        $produto = Product::find($id);

        return view('portfolio-details',compact('produto'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ajuste os formatos e o tamanho permitidos conforme necessário
            'descricao' => 'required',
            'link' => 'required',
        ]);

        $produto = new Product;
        $produto->nome = $request->input('nome');
        $produto->descricao = $request->input('descricao');
        $produto->link = $request->input('link');
        $produto->largura = $request->input('largura');
        $produto->altura = $request->input('altura');
        $produto->peso = $request->input('peso');

        // Fazer upload e salvar a imagem
        if ($request->hasFile('imagem')) {
            $caminhoImagem = $request->file('imagem')->store('product_images', 'public');
            $produto->imagem = $caminhoImagem;
        }

        $produto->save();

        return redirect()->back()->with('success', 'Produto criado com sucesso.');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
