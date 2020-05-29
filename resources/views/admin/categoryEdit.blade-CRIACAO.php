@extends('admin\layouts\app')

@section('title', 'Editar categoria')

@section('content')

    @include('admin\includes\alerts')

    <form action="{{ route('category.update', $category->id) }}" method="post">
        @method('PUT')
        @include('admin\includes\formCategory')
    </form>
@endsection