@extends('layouts.app')

@section('content')
    <div class="single-product-title">
        <h2>{{$prodotto['titolo']}}</h2>
    </div>
    <div class="type-pasta-img">
        <img src="{{ $prodotto['src-h'] }}" alt="{{ $prodotto['titolo'] }}">
    </div>
    <div class="packaging-pasta-img">
        <img src="{{ $prodotto['src-p'] }}" alt="{{$prodotto['titolo'] . ' confezionato' }}">
    </div>
@endsection

@section('page-title')
    {{$prodotto['titolo'] . ' - La Molisana'}} 
@endsection
