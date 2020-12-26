<div class="header-container">
    <div class="header-top">
        <div class="logo-container">
            <img src="{{ asset('/images/logo-la-molisana.png') }}" alt="">
        </div>
    </div>
    <div class="header-bottom">
        <div class="nav-menu">
            <ul>
                <li>
                    <a
                    class="{{ Request::route()->getName() == 'homepage' ? 'active' : '' }}"
                    href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <a
                    id="{{ Request::route()->getName() == 'singleItem' ? 'active' : '' }}"
                    class="{{ Request::route()->getName() == 'product' ? 'active' : '' }}"
                    href="{{ route('product') }}">Prodotti</a>
                </li>
                <li>
                    <a
                    class="{{ Request::route()->getName() == 'news-about' ? 'active' : '' }}"
                    href="{{ route('news-about') }}">News</a>
                </li>
            </ul>
        </div>
        {{-- getName legge il nome in questo caso della route --}}
        {{-- {{ Request::route()->getName()}} --}}
    </div>
</div>
