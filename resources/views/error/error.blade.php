
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Pricing example · Bootstrap</title>

{{--<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/pricing/">--}}

<!-- Bootstrap core CSS -->
    {{--<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/image/metrologie.ico')}}" />

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        #brand-image
        {
            height: 35px;
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/pricing.css') }}" rel="stylesheet">
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <a href="{{ url('/') }}"><img id="brand-image" alt="Website Logo" src="{{asset('/image/metrologie.png')}}" /></a>
    <h5 class="my-0 mr-md-auto font-weight-normal">{{--Côte d'Ivoire Métrologie--}}</h5>

    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Fonctionnalités</a>
        <a class="p-2 text-dark" href="#">Nous</a>
        <a class="p-2 text-dark" href="#">Support</a>
        <a class="p-2 text-dark" href="#">Contact</a>
    </nav>
    <a class="btn btn-outline-primary" href="#">S'inscrire</a>
</div>

<div class="text-center">
    <h1 class="display-4">Résultats de la validation</h1>
    <img class="mb-4" src="{{asset('/image/CIM.png')}}" alt="" width="100" height="100">
    <img class="mb-4" src="{{asset('/image/invalid.png')}}" alt="" width="100" height="100">
    <h2>Le produit <font color="red">{{$numero}}</font></font> n'est pas certifié</h2>
</div>



</body>
</html>
