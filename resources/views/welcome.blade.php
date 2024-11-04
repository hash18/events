@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1>Algum título</h1>

{{--<p>Meu nome é {{$nome}} tenho {{$idade}} anos, e sou {{$profissao}}</p> --}}

@foreach($events as $event)

<p>{{$event->title}}</p>
@endforeach
<div id="search-container" class="col-md-12">
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Próximos Eventos</h2>
    <p>Veja os eventos dos próximos dia</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" >
                <div class="card-body">
                    <div class="card-date">
                        10/09/2020
                    </div>
                    <h5 class="card-title">
                        {{ $event->title }}
                    </h5>
                    <p class="card-participants">X Participantes</p>
                    <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection