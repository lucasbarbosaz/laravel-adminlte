@extends('layouts.default')

@section('page-title', 'Usuários')

@section('page-actions')
    <a href="{{ route('users.create') }}" class="btn btn-primary">Novo Usuário</a>
@endsection

@section('content')

    @session('status')
        <div class="alert alert-success" role="alert">
            {{ $value }}
        </div>
    @endsession
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }} </th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <a href="#" class="btn btn-danger btn-sm">Excluir</a>

                    </td>
                </tr>
            @empty
                Nenhum usuário cadastrado
            @endforelse
        </tbody>
    </table>
@endsection
