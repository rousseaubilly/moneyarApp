@extends('layouts.app')

@section('seo_title', 'Ajouter une banque')

@section('content')

    @include('part.page_title', ['title' => '<i class="fa fa-wrench mr-3"></i> Configuration > Banques > Ajouter une banque'])

    <div class="max-w-xl">
        <form action="" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Nom" required class="w-full block p-2 mt-2 text-sm rounded shadow border border-gray-300" />
            <input type="text" name="swift_code" placeholder="BIC / Swift Code" required class="w-full block p-2 mt-2 text-sm rounded shadow border border-gray-300" />
            <select name="country" id="country" class="w-full block p-2 mt-2 text-sm rounded shadow border border-gray-300" >
                @include('forms.countries')
            </select>
            <button type="submit" class="mt-2 bg-green-600 font-bold px-3 py-2 rounded text-sm text-white"><i class="fa fa-check mr-2"></i> Ajouter</button>
        </form>
    </div>

@endsection
