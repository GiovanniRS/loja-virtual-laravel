@extends('admin\layouts\app')

@section('title', 'Detalhes produto')

@section('content')

    <form action="{{ route('products.destroy', $product->id) }}" method="post" class="float-right">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger p-1" type="submit">Excluir</button>
    </form>
    <p><strong>Nome do produto: {{ $product->name }}</strong></p>
    <p><strong>Descrição do produto:</strong> {{ $product->description }}</p>
    <p><strong>Valor do produto:</strong> {{ $product->price }}</p>
    <p><strong>Fotos do produto:</strong></p>
    <div class="row">
        @foreach ($product->productImage as $image)
            <div class="col-md-3 col-sm-12">
                <img src="/storage/{{ $image->image }}" alt="{{ $product->name }}" class="img-fluid">
            </div>
        @endforeach
    </div>
@endsection