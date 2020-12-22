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
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
