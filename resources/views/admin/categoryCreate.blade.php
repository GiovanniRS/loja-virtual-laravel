@extends('admin\layouts\app')

@section('title', 'Cadastrar categoria')

@section('content')

    @include('admin\includes\alerts')

    <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
        @include('admin\includes\formCategory')
    </form>
@endsection