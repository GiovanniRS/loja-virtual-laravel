@extends('admin\layouts\app')

@section('title', 'Cadastrar produto')

@section('content')

    @include('admin\includes\alerts')

    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @include('admin\includes\formProduct')
    </form>
@endsection