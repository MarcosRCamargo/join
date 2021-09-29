@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Lista de Produtos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('produto.create') }}" title="Cadastrar Produto"> <i class="fas fa-plus-circle"></i>
                Novo Produto</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>Data de Cadastro</th>
            <th>Ações</th>
        </tr>
        @foreach ($produtos as $produto)
            <tr>
                <td><?= $produto->id ?></td>
                <td><?= $produto->nome_produto ?></td>
                <td><?= $produto->id_categoria ?></td>
                <td>R$<?=number_format($produto->preco, 2, ',', ' ');?></td>
                <td><?= $produto->created_at ?></td>
                <td>
                    <form action="{{ route('produto.destroy',$produto->id) }}" method="POST">

                        <a href="{{ route('produto.show',$produto->id) }}" title="Exibir">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('produto.edit',$produto->id) }}" title="Editar">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $produtos->links() !!}

@endsection
