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
                    <div>Sua avaliação termina em <span id="time" style="font-size: 18px; color:red; font-weight:700; ">Carregando...</span></div>
                </div>
                <p>
                    <button class="btn btn-primary mt-3 ml-3" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Instruções
                    </button>
                  </p>
                <div class="card-body">
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            @include('essay.instruction')
                        </div>
                      </div>
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <center>
                        
                            @csrf
                        <font size="1" face="arial, helvetica, sans-serif"> ( Limite de 125 caracteres. )<br>
                        <textarea class="form-control" name=essay wrap=physical cols=28 rows=4 onKeyDown="textCounter(this.form.message,this.form.remLen,5000);" onKeyUp="textCounter(this.form.message,this.form.remLen,5000);"></textarea>
                         
                        <br>
                        faltam&nbsp;<input readonly type=text name=remLen size=3 maxlength=3 value="5000"></font>
                        </form>
                    </center> --}}
                        <!--------TERMINA AQUI------------->
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div id="editor">
                    <form name=myform action="{{route('essay.store')}}" method="POST">
                        @csrf
                        <div class="form-group col-6">
                            <select name="theme" id="theme" class="form-control" required>
                                <option value="" disabled selected>ECOLHA SOBRE QUAL TEXTO VOCÊ FARÁ A REDAÇÃO</option>
                                <option value="TEXTO 01">TEXTO 1</option>
                                <option value="TEXTO 02">TEXTO 2</option>
    
                            </select>
                        </div>
                        <textarea id="froala-editor"  cols=28 rows=4 name="essay"><p><strong><span style="color: rgb(226, 80, 65);">Escreva aqui sua reda&ccedil;&atilde;o</span></strong></p></textarea>
                    <button type="submit" class="btn btn-primary mt-2 ml-3 mb-2">Enviar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<!-- Include Editor style. -->

<!-- Include Editor JS files. -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>


   <script>
       $( document ).ready(function() {
            new FroalaEditor('textarea#froala-editor')
       });
  </script>

<script>
    
    function textCounter(field, countfield, maxlimit) {
    if (field.value.length > maxlimit)
    field.value = field.value.substring(0, maxlimit);
    else 
    countfield.value = maxlimit - field.value.length;
    }
    /* Código exposto em uma página php */
    var contador = {!! $essay->time_left !!};

    /* A partir daqui, pode ficar em um arquivo .js */
    function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function() {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + " minutos e " + seconds + ' segundos';

        if (--timer < 0) {
        location.reload();
        }
    }, 1000);
    }

    window.onload = function() {
    var count = parseInt(contador),
        display = document.querySelector('#time');
    startTimer(count, display);
    };
</script>

@endpush
