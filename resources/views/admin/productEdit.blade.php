@extends('admin\layouts\app')

@section('title', 'Editar produto')

@section('content')

    @include('admin\includes\alerts')

    <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @include('admin\includes\formProduct')
    </form>
    <div class="row">
        @foreach ($product->productImage as $image)
            @include('admin\includes\formDeleteImage')
        @endforeach
    </div>
@endsection