<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary">
    <div class="container-fluid bg-primary">
        <a class="navbar-brand" href="#">Clinics App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item text-lg-start">
                    <a class="nav-link text-lg-start text-white" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-lg-start text-white" href="{{ route('index') }}">index</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-lg-start text-white" href="{{ route('clinics') }}">Clínicas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-lg-start text-white" href="{{ route('employees') }}">Empleados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-lg-start text-white" href="{{ route('contact') }}">Contacto</a>
                </li>
                <li class="nav-item text-lg-start text-white">
                    <a class="nav-link text-lg-start text-white" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-lg-start text-white disabled" aria-disabled="true">Still Working</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
