@extends('layouts.app')
@section('content')
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Gestão de produtos</h1>
    <div class="mx-auto">
      <p class="lead mb-4 text-center" >Sistema de gestão de produtos e categorias.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Cadastrar Produtos</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Cadastrar Categorias</button>
      </div>
    </div>
  </div>
@endsection