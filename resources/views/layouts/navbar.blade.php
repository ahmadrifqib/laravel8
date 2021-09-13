<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container">
            <a class="navbar-brand" href="#">Laravel 8</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @foreach ($navigations as $name => $url)
                    <li>
                        <a class="nav-link" href="{{ $url }}">{{ $name }}</a>
                    </li>
                    @endforeach
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li>
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
