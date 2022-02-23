<!DOCTYPE html>
<html>
<head>
    <title>@yield('seo_title') - Moneyar</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
</head>
<body>

<div class="w-64 bg-gray-800 h-full fixed top-0 bottom-0 left-0">
    <div class="text-center pb-3 pt-3 mb-3 border-b border-gray-500">
        <span class="text-2xl text-white font-bold text-center">moneyar</span>
    </div>
    <a href="#" class="p-3 m-3 rounded text-white  block hover:bg-gray-600">
        <i class="fa fa-dashboard mr-3"></i> Résumé
    </a>
    <a href="#" class="p-3 m-3 rounded text-white  block hover:bg-gray-600">
        <i class="fa fa-credit-card mr-3"></i> Mes comptes
    </a>
    <a href="#" class="p-3 m-3 rounded text-white  block hover:bg-gray-600">
        <i class="fa fa-chart-pie mr-3"></i> Mon budget
    </a>
    <a href="#" class="p-3 m-3 rounded text-white  block hover:bg-gray-600">
        <i class="fa fa-chart-line mr-3"></i> Projections
    </a>
    <a href="#" class="p-3 m-3 rounded text-white  block hover:bg-gray-600">
        <i class="fa fa-wrench mr-3"></i> Configuration
    </a>
</div>

<main class="pl-64">
    <div class="container mx-auto p-3">
        @yield('content')
    </div>
</main>


<script src="{{ mix('js/app.js') }}" ></script>
<script src="https://kit.fontawesome.com/01e8611d8b.js" crossorigin="anonymous"></script>
</body>
</html>
