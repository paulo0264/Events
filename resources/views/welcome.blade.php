@extends('layouts.main')

@section('title', 'Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um Evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>

<div class="col-md-8" id="sub-title">
    <div class="info">
       <h2>Proximos Eventos</h2>
        <p class="subtitle">Veja os eventos dos proximos dias</p>
    </div>
</div>

    <div class="card-group">

            @foreach($events as $event)
        <div class="card cards">
            <img src="/img/card1.jpg" alt="{{ $event->title }}">
            <div class="card-body">
                <p class="card-date">25/12/2021</p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participants">2.000 participantes</p>
                <a href="#" class="btn btn-primary">Saber Mais</a>
            </div>
        </div>
            @endforeach
    </div>

@endsection
