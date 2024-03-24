<!-- resources/views/partials/menu.blade.php -->
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/JessyMau.png') }}" alt="Logo" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="asistencia">Asistencia</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<!-- Añadir espacio para evitar que el contenido se superponga con el menú fijo -->
<div style="height: 70px;"></div>
<!-- Logo Grande -->
<div class="container text-center mt-3">
        <img src="{{ asset('images/JessyMau.png') }}" alt="Logo" class="img-fluid" style="width: 200px; height:200px; max-width: 100%;">
    </div>
