
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/JessyMau.png') }}" type="image/x-icon">
    <title>J&M Weeding</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Calligraffitti&family=MonteCarlo&family=Sriracha&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Kalam:wght@300;400;700&family=Rock+Salt&display=swap" rel="stylesheet">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/personal.css') }}">
   

    
</head>
<body>

    <!-- Header + Menu -->
    @include('components.header2')
    <!-- Carrusel Section -->
    <section class="natural" id="Asistencia">
    <section class="translucid">
        <div style="height: 30px;"></div>
            <div class="container text-center justify-content-center" style="color:#012e67;">
            <h2 class="montecarlo-regular text-center" style="color:#012e67; font-size:70px; font-weight:800px;">Asistencia</h2>
            
            <img id="regaloImagen" src="{{ asset('images/onwork.gif') }}" alt="">
            <!-- Por terminar 
                <p class="fs-3 kalam-light">
                    Para agilizar nuestra organización, <br>
                    nos ayudarías contestando el siguiente formulario
                </p>
                <div class="container form">
                    <h1 class="montecarlo-regular text-center" style="color:#012e67; font-size:70px; font-weight:800px;">Formulario de asistencia</h1>
                    <form action="{{ route('enviarCorreo') }}" method="post">
                    @csrf

                        <label for="nombre">Nombre:</label>
                        <select name="nombre" id="nombre-inv">
                            @if($invitados)
                                @forelse($invitados as $invitado => $nombre)
                                    <option value="{{ $invitado }}">{{ $nombre->Nombre }}</option>
                                @empty
                                    <option value="">No invitados disponibles</option>
                                @endforelse
                            @endif
                        </select>
                            <p class="">Boletos disponibles</p>
                            <p id="boletos-disponibles"></p>
                        
                            <label for="si">Asistiré:</label>
                            <input type="checkbox" name="asistencia" id="si" value="si">
                            <br>
                            <button type="submit">Enviar</button>
                    </form>
                </div>
            -->
        
        <div style="height: 30px;"></div>
    </section>
</section>
    <!-- Footer Section-->  
    @include('components.footer')

    
    <!-- JS personalizado -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#nombre-inv').change(function() {
            var idSeleccionado = $(this).val(); // Obtiene el valor seleccionado del dropdown
            console.log(idSeleccionado)
            // Realiza la solicitud AJAX
            $.ajax({
                type: 'GET',
                url: 'asistencia/id/' + idSeleccionado,
                success: function(data) {
                    $('#boletos-disponibles').text('Boletos disponibles: ' + data);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script>



</body>
</html>
