<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">

    <title>@yield('titulo_pagina')</title>

    <!--bootstrap 4-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <!---->

    <!--FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" integrity="sha512-giQeaPns4lQTBMRpOOHsYnGw1tGVzbAIHUyHRgn7+6FmiEgGGjaG0T2LZJmAPMzRCl+Cug0ItQ2xDZpTmEc+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!--GoogleFonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira+Semi+Condensed:wght@500&display=swap" rel="stylesheet">

    <!--Sweet Alert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--TablerIcons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons@latest/iconfont/tabler-icons.min.css">

    <!--AnimateCSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!--customCSS-->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    @vite('resources/css/app.css')
</head>

<body style='background-image: url(img/background.png);
    background-attachment: fixed;
    background-size: 100%'
>
    <x-sweetalerts.templates />
    <x-navigation.navbar/>
    <div class="container mt-2 mb-2">
        @yield('content')
    </div>
    <x-navigation.footer/>

</body>

</html>