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
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('product') }}">Prodotti</a>
                </li>
                <li>
                    <a href="{{ route('news-about') }}">News</a>
                </li>
            </ul>
        </div>
    </div>
</div>
