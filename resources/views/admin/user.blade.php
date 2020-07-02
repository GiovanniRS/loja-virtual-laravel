@extends('admin\layouts\app')

@section('title', 'Usuários')

@section('content')
    <a class="btn btn-primary" href="{{ route('users.create') }}">Cadastrar</a>

    <div class="table-responsive my-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="d-flex">
                            <a class="btn btn-primary p-1 mr-2" href="{{ route('users.edit', $user->id) }}">Editar</a>
                            <form action="{{ route('categories.destroy', $user->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger p-1" type="submit">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection