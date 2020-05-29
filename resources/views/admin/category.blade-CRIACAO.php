@extends('admin\layouts\app')

@section('title', 'Categorias')

@section('content')
    <a class="btn btn-primary" href="{{ route('category.create') }}">Cadastrar</a>
    @if (isset($categories))
        <p class="text-center">Nenhum registro encontrado</p>
    @else
        <div class="table-responsive my-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->user()->first()->name }}</td>
                            <td class="d-flex">
                                <a class="btn btn-primary p-1 mr-2" href="{{ route('category.edit', $category->id) }}">Editar</a>
                                <form action="{{ route('category.destroy', $category->id) }}" method="post">
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
    @endif
@endsection