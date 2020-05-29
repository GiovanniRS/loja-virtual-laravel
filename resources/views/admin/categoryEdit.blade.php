@extends('admin\layouts\app')

@section('title', 'Editar categoria')

@section('content')

    @include('admin\includes\alerts')

    <form action="{{ route('categories.update', $category->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @include('admin\includes\formCategory')
    </form>
@endsection