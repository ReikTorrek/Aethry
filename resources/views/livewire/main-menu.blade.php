<nav class="navbar navbar-expand bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Aethry</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @foreach ($menuItems as $key => $item)
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ $key }}">{{ $item }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
