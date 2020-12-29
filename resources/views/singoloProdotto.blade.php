@extends('layouts.app')

@section('content')
    <div class="single-product-title">
        <h2>{{$prodotto['titolo']}}</h2>
    </div>
    <div class="type-pasta-images-container">
        <div class="type-pasta-img">
            <img src="{{ $prodotto['src-h'] }}" alt="{{ $prodotto['titolo'] }}">
        </div>
        <div class="packaging-pasta-img">
            <img src="{{ $prodotto['src-p'] }}" alt="{{$prodotto['titolo'] . ' confezionato' }}">
        </div>
        <div class="left-arrow-link">
            <a href="#">
                <i class="fas fa-chevron-left"></i>
            </a>
        </div>
        <div class="right-arrow-link">
            <a href="#">
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </div>
    <div class="description-paragraph">
        <div class="container">
            <div class="dettails-container">
                <div class="dettails-top">
                    <div class="dettails-logo">
                        <img src="{{ asset('images/logo-la-molisana.png') }}" alt="Logo La Molisana">
                    </div>
                    <div class="dettails-paragraph">
                        <h3 class="text-uppercase">Grano decorticato a pietra</h3>
                        <h3 class="text-uppercase">Trafilatura al bronzo</h3>
                    </div>
                    <div class="dettails-quality-logo">
                        <img src="{{ asset('images/marchio-matese.png') }}" alt="Logo acque del Matese">
                    </div>
                </div>
                <div class="dettails-bottom">
                    <div class="dettails-type text-uppercase">
                        {{ $prodotto['titolo'] }}
                    </div>
                    <div class="dettails-cooking text-uppercase">
                        {{ 'tempo di cottura : ' . $prodotto['cottura'] }}
                    </div>
                    <div class="dettails-weight">
                        {{ $prodotto['peso'] }}
                    </div>
                </div>
            </div>
            {{-- questa sintassi mi permetti di leggere eventuali tag html ed interpretarli come html --}}
            <p>{!! $prodotto['descrizione'] !!}</p>
        </div>
    </div>
@endsection

@section('page-title')
    {{$prodotto['titolo'] . ' - La Molisana'}}
@endsection

@section('fontawesome-cdn')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
@endsection
