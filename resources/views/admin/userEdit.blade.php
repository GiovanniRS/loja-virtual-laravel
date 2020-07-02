@extends('admin\layouts\app')

@section('title', 'Editar usuário')

@section('content')

    @include('admin\includes\alerts')

    <form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @include('admin\includes\formUser')
    </form>
@endsection