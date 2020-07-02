@extends('admin\layouts\app')

@section('title', 'Produtos')

@section('content')
    <a class="btn btn-primary" href="{{ route('products.create') }}">Cadastrar</a>
    
    <div class="table-responsive my-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->user()->first()->name }}</td>
                        <td class="d-flex">
                            <a class="btn btn-primary p-1 mr-2" href="{{ route('products.edit', $product->id) }}">Editar</a>
                            <a class="btn btn-primary p-1" href="{{ route('products.show', $product->id) }}">Detalhes</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection