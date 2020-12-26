@extends('layouts.app')

@section('content')

    <section class="pruducts-section">
        <div class="container">
            <div class="pruducts-section-container">
                @foreach($shapes as $key => $shape)
                    <h2 class="text-uppercase">{{ $key }}</h2>
                    <div class="card-container">
                        @foreach ($shape as $type)
                            <div class="card">
                                <img src="{{ $type['src'] }}" alt="{{ $type['titolo'] }}">
                                <a class="overlay" href="#">
                                    <div >
                                        {{ $type['titolo'] }}
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

{{-- non ha importanza l'ordine delle section  --}}
{{-- se come contenuto ho solo una striga posso passarglielo come secondo parametro --}}
@section('page-title', 'Prodotti - La Molisana')
