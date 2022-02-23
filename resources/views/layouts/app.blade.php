<!DOCTYPE html>
<html>
<head>
    <title>@yield('seo_title') - Moneyar</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
</head>
<body>

<div class="w-64 bg-gray-800 h-full fixed top-0 bottom-0 left-0">
    <div class="text-center pb-4 pt-4 mb-3 border-b border-gray-500">
        <span class="text-2xl text-white font-bold text-center">moneyar</span>
    </div>
    <a href="#" class="px-4 py-3 m-3 rounded text-white  block hover:bg-gray-600">
        <i class="fa fa-dashboard mr-3"></i> Résumé
    </a>
    <a href="#" class="px-4 py-3 m-3 rounded text-white  block hover:bg-gray-600">
        <i class="fa fa-credit-card mr-3"></i> Mes comptes
    </a>
    <a href="#" class="px-4 py-3 m-3 rounded text-white  block hover:bg-gray-600">
        <i class="fa fa-chart-pie mr-3"></i> Mon budget
    </a>
    <a href="#" class="px-4 py-3 m-3 rounded text-white  block hover:bg-gray-600">
        <i class="fa fa-chart-line mr-3"></i> Projections
    </a>
    @if(Route::current()->getPrefix() == "/settings")
        <div href="/settings/banks" class="px-4 py-3 m-3 rounded text-white  block bg-gray-600">
            <i class="fa fa-wrench mr-3"></i> Configuration
            <span class="block border-b border-gray-500 mb-3 pb-2 pt-2"></span>
            <a href="{{ route('banks.list') }}" class="block text-gray-300 my-2 text-sm">Banques</a>
            <a href="{{ route('transactions_categories.list') }}" class="block text-gray-300 my-2 text-sm">Catégories de transaction</a>
        </div>
    @else
        <a href="{{ route('banks.list') }}" class="px-4 py-3 m-3 rounded text-white  block hover:bg-gray-600">
            <i class="fa fa-wrench mr-3"></i> Configuration
        </a>
    @endif
</div>

<main class="pl-64">
    <div class="container mx-auto p-4">
        @yield('content')
    </div>
</main>


<script src="{{ mix('js/app.js') }}" ></script>
<script src="https://kit.fontawesome.com/01e8611d8b.js" crossorigin="anonymous"></script>
</body>
</html>
