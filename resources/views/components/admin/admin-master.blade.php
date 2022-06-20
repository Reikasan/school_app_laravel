<!doctype html>
<html>
<head>
    <title>School APP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <meta name="description" content="This site is a sample for Reservation Management System and its built with HTML, CSS, Javascript and PHP.">
    

    
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsible.css')}}">
    <link rel="stylesheet" href="{{asset('css/login_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/login_style_responsible.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#f73d93">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;400&display=swap');
   </style>
</head>

<body>
    <nav class="nav top-nav">
        <div class="logo">
            <a href="">School APP</a>
        </div>
    </nav>
    
<div class="container">
    @yield('content')
    <footer>
        <div class="copyright text-center">
            <small>2021 &#64;Reika Akuzawa</small>
        </div> 
    </footer>
</div> <!-- end of .container -->

<nav id="footerNav" class="w-100 nav nav-justified">
    <a class="nav-link" href="index.php"><i class="fas fa-home"></i></a>    
    <a class="nav-link" href="mails.php"><i class="fas fa-envelope"></i></a>    
    <a class="nav-link" href="lessons.php"><i class="fas fa-calendar"></i></a>
    <a class="nav-link" href="student.php"><i class="fas fa-user"></i></a>
    <a class="nav-link" href="menu.php"><i class="fas fa-bars"></i></a>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
    
</html>