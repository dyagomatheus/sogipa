@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (auth()->user()->essay)
                    <p>VOCÊ JÁ FEZ SUA PROVA!</p>
                    @else
                    <a href="{{route('initAvaliation')}}" class="btn btn-primary">Fazer Avaliação</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
