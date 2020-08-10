@extends('layouts.app')
@push('style')
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div>Editar Curso</div>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(Session::has("error"))
                        <div class="alert alert-danger"><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong>Ops!</strong>
                           {{ Session::get("error") }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div id="editor">
                    <form name=myform action="{{route('course.update', $course->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <div class="form-group col-6 mt-2">
                                <label for="">Curso</label>
                                <input type="text" value="{{ $course->name }}" name="name" class="form-control">
                            </div>
                            <div class="form-group col-6 mt-2">
                                <label for="">Data de Realização</label>
                                <input type="date" value="{{ $course->realization_date }}" name="realization_date" class="form-control">
                            </div>
                            <div class="form-group col-6 mt-2">
                                <label for="">Horas Aulas</label>
                                <input type="number" value="{{ $course->class_hours }}" name="class_hours" class="form-control">
                            </div>
                            <div class="form-group col-6 mt-2">
                                <label for="">Coordenador</label>
                                <input type="text" value="{{ $course->coordinator }}" name="coordinator" class="form-control">
                            </div>
                            <div class="form-group col-6 mt-2">
                                <label for="">Assinatura Coordenador</label>
                                <input type="file" name="image" class="form-control" accept=".png">
                            </div>
                            <div class="form-group col-6 mt-2">
                                <label for="">Palestrante</label>
                                <input type="text" value="{{ $course->speaker }}" name="speaker" class="form-control">
                            </div>
                            <div class="form-group col-6 mt-2">
                                <label for="">Assunto Abordado</label>
                                <input type="text" value="{{ $course->lecture }}" name="lecture" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary mt-2 ml-3 mb-2">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')

@endpush
