@extends('layouts.app')

@section('seo_title', 'Compte ' . $account->name)

@section('content')

    @include('part.page_title', ['title' => '<i class="fa fa-credit-card mr-3"></i> Détails Compte'])

    <div class="text-right my-6 block">
        <a href=""
           class="px-3 py-1 text-sm rounded bg-blue-600 text-white font-bold inline-block"><i
                class="fa fa-plus mr-3"></i> Ajouter une transaction</a>
    </div>


    <div class="p-4 border bg-gray-100 mb-3">
        <div class="grid grid-cols-3">
            <div class="col-span-2">
                <span class="text-xl block font-bold">{{ $account->name }}</span>
                    <span class="block">Banque : {{ $account->getBank->name }} - BIC : {{ $account->getBank->swift_code }} - IBAN/N° de compte : {{ $account->account_number }} </span>
                    @if($account->description)
                        <span class="text-gray-800 italic text-sm border-t border-gray-200 block mt-2 pt-2">
                            {{ $account->description }}
                        </span>
                    @endif
            </div>
            <div class="text-right self-center">
                <span class="text-xl font-bold">{{ $account->formattedBalance() }}</span>
            </div>
        </div>
    </div>

    <table class="w-full">
        <thead>
            <tr class="border-b">
                <th class="py-2">Date</th>
                <th>Moyen de paiement</th>
                <th>Détails</th>
                <th>Montant</th>
            </tr>
        </thead>
    </table>


@endsection
