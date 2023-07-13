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
        $produtos = Product::all();

        return view('amigurumis', compact('produtos'));
    }

    public function teste()
    {
        return view('imagem_teste');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'imagem' => [
                'required',
                'image',
                'max:8192', // Limite de tamanho de upload de 8MB
            ],
            'descricao' => 'required',
            'link' => 'required',
        ]);

        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $nomeArquivo = $imagem->getClientOriginalName();

            // Redimensionar a imagem para 1.5MB
            $imagemRedimensionada = Image::make($imagem)->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode('jpg', 75);

            $nomeArquivoRedimensionado = 'redimensionado_'.$nomeArquivo;

            // Salvar a imagem redimensionada no diretório de armazenamento (pasta storage/app/public)
            Storage::put('public/'.$nomeArquivoRedimensionado, $imagemRedimensionada);

            $produto = new Product;
            $produto->nome = $request->input('nome');
            $produto->imagem = $nomeArquivoRedimensionado;
            $produto->descricao = $request->input('descricao');
            $produto->link = $request->input('link');
            $produto->save();
        }

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
