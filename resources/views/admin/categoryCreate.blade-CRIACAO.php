@extends('admin\layouts\app')

@section('title', 'Cadastrar categoria')

@section('content')

    @include('admin\includes\alerts')

    <form action="{{ route('category.store') }}" method="post">
        @include('admin\includes\formCategory')
    </form>
@endsection