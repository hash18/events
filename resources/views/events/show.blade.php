@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{ $event->title }}</h1>
            <p class="event-city"><ion-icon name="location-outline">{{ $event->city }}</ion-icon></p>
            <p class="events-participants"><ion-icon name="people-outline">X participants</ion-icon></p>
            <p class="events-owner"><ion-icon name="start-outline">Dono do Evento</ion-icon></p>
            <a href="#" class="btn btn-primary">Confirmar presença</a>
        </div>
    </div>
</div>

@endsection