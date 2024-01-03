<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAAV</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/nav-bar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/calendario-agend.css') }}">

    <!-- Sweetalert2 -->
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@11') }}"></script>

    <!-- FullCalendar JS & CSS library -->
    <script src="{{ asset('js/fullcalendar-6.1.8/dist/index.global.min.js') }}"></script>
    <script src="{{ asset('js/agendamentos_js/calendario-agend.js') }}"></script>

</head>
<body>
    <header>
        <x-nav-bar/>
    </header>
    <div class="caixa">
        <div class="div-principal">
            <div id="calendario"></div>
        </div>
    </div>
</body>
</html>