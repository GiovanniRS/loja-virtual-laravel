@extends('admin\layouts\app')

@section('title', 'Cadastrar usuário')

@section('content')

    @include('admin\includes\alerts')

    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
        @include('admin\includes\formUser')
    </form>
@endsection