@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Lista de Categria</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('categoria.create') }}" title="Cadastrar categoria"> <i class="fas fa-plus-circle"></i>
                Nova Categoria</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{$message}}</p>
        </div>
    @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Data de Cadastro</th>
            <th>Ações</th>
        </tr>
        @foreach ($categorias as $categoria)
            <tr>
                <td><?=$categoria->id ?></td>
                <td><?=$categoria->nome_categoria ?></td>
                <td><?=$categoria->created_at->format('m/d/Y H:i')?></td>
                <td>
                    <form action="{{ route('categoria.destroy', $categoria->id) }}" method="POST">

                        <a href="{{ route('categoria.show',$categoria->id) }}" title="Exibir">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('categoria.edit', $categoria->id) }}" title="Editar">
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

    {{-- {!! $categorias->links() !!} --}}

@endsection
