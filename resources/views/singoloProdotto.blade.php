@extends('layouts.app')

@section('content')
    <p>{{$prodotto['titolo']}}</p>
    <div class="type-pasta-img">
        <img src="{{ $prodotto['src-h'] }}" alt="{{ $prodotto['titolo'] }}">
    </div>
    <div class="packaging-pasta-img">
        <img src="{{ $prodotto['src-p'] }}" alt="{{$prodotto['titolo'] . ' confezionato' }}">
    </div>
@endsection
