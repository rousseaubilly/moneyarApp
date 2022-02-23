@extends('layouts.app')

@section('seo_title', 'Liste des banques')

@section('content')

    @include('part.page_title', ['title' => '<i class="fa fa-wrench mr-3"></i> Configuration > Banques'])

    <div class="text-right my-6 block">
        <a href="{{ route('banks.create') }}" class="px-3 py-1 text-sm rounded bg-blue-600 text-white font-bold inline-block"><i class="fa fa-plus mr-3"></i> Ajouter une banque</a>
    </div>

    <table class="w-full">
        <thead>
        <tr class="border-b">
            <th class="text-left py-2">Nom de la banque</th>
            <th class="text-center">Bic / Swift Code</th>
            <th class="text-center">Pays</th>
            <th class="text-center"></th>
        </tr>
        </thead>
        <tbody>
            @foreach($banks as $bank)
                <tr class="border-b text-left">
                    <td class="py-2">{{ $bank->name }}</td>
                    <td class="text-center">{{ $bank->swift_code }}</td>
                    <td class="text-center">{{ $bank->country }}</td>
                    <td>
                        <a href="">Supprimer+</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $banks->links() }}

@endsection
