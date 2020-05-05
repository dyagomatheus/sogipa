@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{route('register')}}" class="btn btn-success mb-2">Cadastrar Aluno</a>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Lista de Alunos</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Aluno</th>
                            <th scope="col">E-mail</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
                <span class="ml-4">
                    {{ $users->links() }}
                </span>
            </div>
        </div>
    </div>
</div>
@endsection
