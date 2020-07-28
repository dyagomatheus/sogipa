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
                <div class="card-header">Cursos</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Data de Realização</th>
                            <th scope="col">Palestrante</th>
                            <th scope="col">Assunto Abordado</th>
                            <th scope="col">Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if (isset($courses))
                                @foreach ($courses as $course)
                                <tr>
                                    <th scope="row">{{$course->id}}</th>
                                    <th scope="row">{{$course->name}}</th>
                                    <th scope="row">{{$course->realization_date}}</th>
                                    <th scope="row">{{$course->speaker}}</th>
                                    <th scope="row">{{$course->lecture}}</th>
                                    <td> <a href="{{route('course.edit', $course->id)}}">Editar</a></td>
                                    <td> <a href="{{route('course.delete', $course->id)}}">Deletar</a></td>
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
