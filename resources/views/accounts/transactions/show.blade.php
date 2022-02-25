@extends('layouts.app')

@section('seo_title', 'Compte ' . $account->name)

@section('content')

    @include('part.page_title', ['title' => '<i class="fa fa-credit-card mr-3"></i> Détails Compte'])


    <div class="p-4 border bg-gray-100 mb-3">
        <div class="grid grid-cols-4">
            <div class="col-span-3">
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
                <th class="py-2 text-center w-32">Date</th>
                <th class="text-center w-64">Moyen de paiement</th>
                <th class="text-left">Détails</th>
                <th class="text-center">Montant</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
                <tr class="border-b">
                    <td class="text-center">{{ $transaction->charged_at->format('d/m/Y') }}</td>
                    <td class="text-center">{{ $transaction->payment_method }}</td>
                    <td class="py-4">
                        <span class="block">{!! $transaction->getCategory->nameFormatted() !!}</span>
                        <span class="font-bold block my-2">{{ $transaction->origin }}</span>
                        <span class="italic">{{ $transaction->description }}</span>
                    </td>
                    <td class="text-center">
                        @if($transaction->amount < 0)
                            <span class="text-red-500 font-bold">{{ $transaction->formattedAmount() }}</span>
                        @else
                            <span class="font-bold">{{ $transaction->formattedAmount() }}</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
