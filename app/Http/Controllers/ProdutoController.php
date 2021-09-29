<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::latest()->get();
        $produtos = Produto::latest()->paginate(5);

        return view('Produto.index', compact(['produtos', 'categorias']))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::latest()->get();

        return view('Produto.cadastro', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome_produto' => 'required',
            'id_categoria' => 'required',
            'preco' => 'required'
        ]);

        Produto::create($request->all());

        return redirect()->route('produto.index')
            ->with('success', 'Produto Cadastrado com Sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produtos
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produtos)
    {
        $categorias = Categoria::latest()->get();

        return view('Produto.exibir', compact(['produtos', 'categorias']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        $categorias = Categoria::latest()->get();

        return view('Produto.editar', compact(['produto', 'categorias']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'nome_produto' => 'required',
            'id_categoria' => 'required',
            'preco' => 'required'
        ]);
        $produto->update($request->all());

        return redirect()->route('produto.index')
            ->with('success', 'Produto atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect()->route('produto.index')
            ->with('success', 'Produto excluido');
    }
}
