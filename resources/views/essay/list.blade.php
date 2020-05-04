@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{route('register')}}" class="btn btn-success mb-2">Cadastrar Aluno</a>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Redações</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Aluno</th>
                            <th scope="col">Inicio</th>
                            <th scope="col">Término</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($essays as $essay)
                            <tr>
                                <th scope="row">{{$essay->id}}</th>
                                <td> <a href="{{route('essay.show', $essay->id)}}" target="_blank">{{$essay->user->name}}</a></td>
                                <th scope="row">{{$essay->created_at}}</th>
                                <th scope="row">{{$essay->updated_at}}</th>

                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
