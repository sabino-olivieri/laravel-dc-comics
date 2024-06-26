<header class="fixed-top">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}"><img src="/img/logo.png" class="logo" alt="Logo DC-Comics"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active btn" aria-current="page" href="{{route('comics.index')}}">Lista comic</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn" aria-current="page" href="{{route('comics.create')}}">Aggiungi nuovo comic</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn" aria-current="page" href="{{route('comics.trash')}}">Cestino</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
