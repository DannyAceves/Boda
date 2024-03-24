<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/JessyMau.png') }}" type="image/x-icon">¿
    <title>J&M Weeding</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Calligraffitti&family=MonteCarlo&family=Sriracha&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Kalam:wght@300;400;700&family=Rock+Salt&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/personal.css') }}">
    @vite(['resoucers/css/app.css','resources/js/app.js'])
    
</head>
<body>

    <!-- Header + Menu -->
    @include('components.header')
    <!-- Carrusel Section -->
    @include('components.carrusel')
    <!-- Timer Section -->
    @include('components.Timer')
    <!-- Location Section -->  
    @include('components.location')
    <!-- DresCode Section -->  
    @include('components.vestimenta')
    <!-- Itinerary Section -->  
    @include('components.itinerary')
    <!-- Gifts Section -->  
    @include('components.regalos')
    <!-- Footer Section-->  
    @include('components.footer')

    
    <!-- JS personalizado -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=TU_API_KEY&callback=initMap" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/timer.js') }}"></script>
</body>
</html>
