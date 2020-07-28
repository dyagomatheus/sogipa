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
                            <th scope="col">Aluno</th>
                            <th scope="col">Data de Em issão</th>
                            <th scope="col">Palestrante</th>
                            <th scope="col">Assunto Abordado</th>
                            <th scope="col">Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if (isset($students))
                                @foreach ($students as $student)
                                <tr>
                                    <th scope="row">{{$student->id}}</th>
                                    <th scope="row">{{$student->name}}</th>
                                    <th scope="row">{{$student->created_at}}</th>
                                    <th scope="row">{{$student->course->speaker}}</th>
                                    <th scope="row">{{$student->course->lecture}}</th>
                                    <td> <a href="{{route('student.show', $student->id)}}">Visualizar</a></td>
                                    <td> <a href="{{route('student.edit', $student->id)}}">Editar</a></td>
                                    <td> <a href="{{route('student.delete', $student->id)}}">Deletar</a></td>
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
