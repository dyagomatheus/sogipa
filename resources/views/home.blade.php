@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @if (auth()->user()->essay)
                        Prova finalizada!
                    @else
                        Prova
                    @endif
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (auth()->user()->essay && auth()->user()->essay->status == false)
                    <span class="alert-success">
                        <h5>Parabéns! Você finalizou sua prova com sucesso!</h5>
                    </span>
                    <p><a href="https://faculdadesogipa.edu.br/vestibular-online.php">Clique aqui</a> para retornar para o site com as informações do vestibular e aguarde nosso retorno.</p>
                
                    @elseif(auth()->user()->essay && auth()->user()->essay->time_left <= 0 && auth()->user()->essay->status == true)
                    <h5>Desculpe! Seu tempo de prova terminou e você não concluiu.</h5>
                    @else
                    <a href="{{route('initAvaliation')}}" class="btn btn-primary">Fazer Avaliação</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
