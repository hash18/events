@extends('layouts.main')

@section('title', 'Product per id - HDC Events')

@section('content')

<h1>Algum título</h1>

@if($id != null)
<p>Exibindo o product ID: {{ $id }}</p>
@endif

@endsection