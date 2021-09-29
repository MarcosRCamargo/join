@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cadastrar Categoria</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('categoria.index') }}" title="Voltar"> <i class="fas fa-backward "></i> Voltar</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> 
            <ul>
                @foreach ($errors->all() as $error)
                    <li></li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('categoria.store') }}" method="POST" >
        @csrf
        @method('POST')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome Categoria:</strong>
                    <input type="text" name="nome_categoria" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>

    </form>
@endsection
