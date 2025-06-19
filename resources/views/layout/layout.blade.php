<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
    <!-- Primary Meta Tags -->
    <meta name="type" content="website">
    <meta name="title" content="Chloe Bonifacio">
    <meta name="description" content="Chloe Bonifacio's Web Portoflio. A 21-year-old junior full stack web developer based in the Philippines.">
    <meta name="image" content="https://chloebonifacio.000webhostapp.com/images/chloebanner.png">
    <meta name="application-name" content="Chloe Bonifacio">
    <meta name="author" content="Chloe Bonifacio,bonifacio.chloesophia@gmail.com">
    <meta name="keywords" content="HTML, CSS, Bootstrap, Laravel, Portfolio, Website">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://chloebonifacio.000webhostapp.com/">
    <meta property="og:title" content="Chloe Bonifacio">
    <meta property="og:description" content="A 21-year-old web developer based in the Philippines.">
    <meta property="og:image" content="https://chloebonifacio.000webhostapp.com/images/chloebanner.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://chloebonifacio.000webhostapp.com/">
    <meta property="twitter:title" content="Chloe Bonifacio">
    <meta property="twitter:description" content="Chloe Bonifacio's Web Portoflio. A 21-year-old junior full stack web developer based in the Philippines.">
    <meta property="twitter:image" content="https://chloebonifacio.000webhostapp.com/images/chloebanner.png">

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
		


    
    <title>Chloe | @yield('title')</title>


    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    {{-- JQuery 3.6.0 --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ URL::asset("/css/normalize.css") }}">
    <link rel="stylesheet" href="{{ URL::asset("/css/main.css") }}">

    {{-- FontAwesome --}}
    <link href="{{ asset('lib\fontawesome-6.1.2\css\all.min.css') }}" rel="stylesheet">

    {{-- AOS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    @yield('css')
    
</head>
<body>
    @include('includes.navbar')

    {{-- Main Content --}}
    <main>
        <div id="socialInfo">
            <div class="vertical-line mb-3"></div>   
            <p>bonifacio.chloesophia@gmail.com</p>
            
            <a class="c-primary" href="https://gitlab.com/bonifacio.chloesophia" target="_blank"><i class="c-primary fab fa-gitlab mb-3"></i></a>
            
            <a class="c-primary" href="https://github.com/ChloeBonifacio" target="_blank"><i class="c-primary  fab fa-github mb-3"></i></a>
            
            <a class="c-primary" href="https://www.linkedin.com/in/chloe-bonifacio/" target="_blank"><i class="c-primary  fab fa-linkedin-in mb-3"></i></a>
            
            <a class="c-primary" href="https://www.facebook.com/ChloweeBee" target="_blank"><i class="c-primary  fab fa-facebook-f mb-3"></i></a>
        </div>

        <div class="container-fluid"  style="min-height: 50vh">
            @yield('content')
        </div>
        
    </main>

    <footer class="footer">
        <h4>Made with <i class="fas fa-heart c-primary"></i> by Chloe</h4>
        <p>Check out website frontend code in <a href="https://github.com/ChloeBonifacio/chloe-personal-portfolio-v1.git" class="c-primary">GitHub</a></p>
    </footer>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    @yield('script')
</body>
</html>