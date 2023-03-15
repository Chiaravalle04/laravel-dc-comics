<header>

    <div class="main-container d-flex jc-space-b ai-center">

        <div class="container-logo">

            <a href="/">

                <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="">

            </a>

        </div>

        <nav>

            <ul class="d-flex jc-center ai-center">

                @foreach ($navBar as $link)
            
                <li>

                    <a href="{{ route( $link['url'] ) }}">{{ $link['link'] }}</a>

                </li>

                @endforeach

            </ul>

        </nav> 
        
        <div class="btn-login">

            <a href="{{ route('login') }}">LOGIN</a>

        </div>

    </div>

</header>