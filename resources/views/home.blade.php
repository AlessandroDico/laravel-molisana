@extends('layouts.app')

@section('content')
    <div class="section-home">
        <div class="container">
            <h1>Benvenuto</h1>
            <h1>Guarda i nostri <a class="a-link" href="{{ route('product') }}">prodotti</a> </h1>
        </div>
    </div>
@endsection


{{-- non ha importanza l'ordine delle section  --}}
{{-- se come contenuto ho solo una striga posso passarglielo come secondo parametro --}}
@section('page-title', 'Home - La Molisana')
