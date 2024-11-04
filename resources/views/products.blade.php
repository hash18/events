@extends('layouts.main')

@section('title', 'Products - HDC Events')

@section('content')

<h1>Algum título</h1>

<p>Esta é a página de produtos</p>

@if($busca != '')
<p>Exibindo o product com a busca: {{ $busca }}</p>
@endif

@endsection