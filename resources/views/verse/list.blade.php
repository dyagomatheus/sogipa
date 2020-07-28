@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has("success"))
        <div class="alert alert-success"><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Tudo certo!</strong>
            {{ Session::get("success") }}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Certificados</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Professor</th>
                            <th scope="col">Disciplina</th>
                            <th scope="col">Assuntos</th>
                            <th scope="col">Curso</th>
                            <th scope="col">Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if (isset($verses))
                                @foreach ($verses as $verse)
                                <tr>
                                    <th scope="row">{{$verse->id}}</th>
                                    <th scope="row">{{$verse->teachers}}</th>
                                    <th scope="row">{{$verse->discipline}}</th>
                                    <th scope="row">{!! $verse->subjects !!}</th>
                                    <th scope="row">{{$verse->course->name}}</th>
                                    <td> <a href="{{route('verse.edit', $verse->id)}}">Editar</a></td>
                                    <td> <a href="{{route('verse.delete', $verse->id)}}">Deletar</a></td>
                                </tr>
                                @endforeach                                
                            @endif
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
