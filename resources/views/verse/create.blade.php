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
                    <div>Cadastro de Informações</div>
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

                        <strong><a href="{{ route('verse.index') }}">Lista de Professores</a></strong>

                    </div>
                    @endif
                    <strong><a href="{{ route('home') }}">Início</a></strong>

                    <br>
                    <form name=myform action="{{route('verse.store')}}" method="POST">
                        @csrf
                            <div class="form-group col-6 mt-2">
                                <label for="">Professor</label>
                                <input type="text" name="teachers" class="form-control">
                            </div>
                            <div class="form-group col-6 mt-2">
                                <label for="">Disciplina</label>
                                <input type="text" name="discipline" class="form-control">
                            </div>
                            <div class="form-group col-6 mt-2">
                                <label for="">Assuntos</label>
                                <textarea name="subjects" class="form-control"></textarea>
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
<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>


<script type="text/javascript">
    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() }); // convert all text areas to rich text editor on that page

    bkLib.onDomLoaded(function() {
        new nicEditor().panelInstance('essay');
    }); // convert text area with id area1 to rich text editor.
    function onpaste() {

    $("#essay").bind('paste', function(e) {
                        e.preventDefault();
                    });

    }
</script>
@endpush
