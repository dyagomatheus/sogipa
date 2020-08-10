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
                    <div>Cadastro de Certificado</div>
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
                    @if(Session::has("success"))
                    <div class="alert alert-success"><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <strong>Tudo certo!</strong>
                        {{ Session::get("success") }}

                        <strong><a href="{{ route('student.index') }}">Lista de Certificados</a></strong>

                    </div>
                    @endif
                    <strong><a href="{{ route('home') }}">Início</a></strong>

                    <br>
                    <form name=myform action="{{route('student.store')}}" method="POST">
                        @csrf
                            <div class="form-group col-6 mt-2">
                                <label for="">Aluno</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group col-6 mt-2">
                                <label for="">CPF</label>
                                <input type="number" name="cpf" class="form-control" minlength="11" maxlength="11">
                            </div>
                            <div class="form-group col-6 mt-2">
                                <label for="">Curso</label>
                                <select name="course_id" id="course_id" class="form-control">
                                    <option disabled selected>Escolha um curso</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                                    @endforeach
                                </select>
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
