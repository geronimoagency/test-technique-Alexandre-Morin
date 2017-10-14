<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DSGN | MEDIA') }}</title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="all">

    <!-- Style -->
    <link rel="stylesheet" href="{{ url('assets/css/app.min.css') }}">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="app">
   @include('layout.partials.nav')

    <div class="container-fluid">
        @yield('content')
    </div>

    @include('layout.partials.footer')
</div>

<!-- Scripts -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- ScrollUp JS -->
<script src="{{url('assets/js/scrollUp.min.js')}}"></script>

<!-- JS -->
<script src="{{url('assets/js/app.min.js')}}"></script>

{{--Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent--}}
<script>
    window.cookieconsent_options = {
        "message":"En poursuivant votre navigation sur ce site, vous acceptez l’utilisation de cookies afin de vous fournir une meilleure expérience de navigation.",
        "dismiss":"J'accepte",
        "learnMore":"En savoir plus.",
        "link":"{{url('cookie-consent')}}",
        "theme":"dark-bottom"
    };
</script>
<!-- Cookie Consent plugin -->
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>

</body>
</html>
