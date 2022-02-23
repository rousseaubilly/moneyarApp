@extends('layouts.app')

@section('seo_title', 'Liste des catégories')

@section('content')

    @include('part.page_title', ['title' => '<i class="fa fa-wrench mr-3"></i> Configuration > Catégories'])

    <div class="text-right my-6 block">
        <a href="{{ route('transactions_categories.create') }}" class="px-3 py-1 text-sm rounded bg-blue-600 text-white font-bold inline-block"><i class="fa fa-plus mr-3"></i> Ajouter une catégorie</a>
    </div>

    <table class="w-full">
        <thead>
        <tr class="border-b">
            <th class="text-left py-2">Nom de la catégorie</th>
        </tr>
        </thead>
        <tbody>
        <!-- Hack Purge Tailwind CSS -->
        <span class="bg-orange-300 text-orange-500 bg-red-300 text-red-500 bg-green-300 text-green-500 bg-cyan-300 text-cyan-500 p-1 rounded hidden"></span>

            @foreach($transactions_categories as $category)
                <tr class="border-b text-left">
                    <td class="py-2">{!! $category->nameFormatted() !!}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
