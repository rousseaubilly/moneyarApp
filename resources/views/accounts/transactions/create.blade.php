@extends('layouts.app')

@section('seo_title', 'Créer une transaction')

@section('content')

    @include('part.page_title', ['title' => '<i class="fa fa-credit-card mr-3"></i> Ajouter une transaction'])
    <div class="max-w-xl">
        <div>{{ $errors }}</div>
        <form action="" method="POST">
            @csrf
            <input type="datetime-local" name="charged_at" required class="w-full block p-2 mt-2 text-sm rounded shadow border border-gray-300" />
            <input type="text" name="origin" placeholder="Créancier/Débiteur" required class="w-full block p-2 mt-2 text-sm rounded shadow border border-gray-300" />
            <input type="text" name="description" placeholder="Description" required class="w-full block p-2 mt-2 text-sm rounded shadow border border-gray-300" />
            <input type="number" name="amount" placeholder="Montant" step="0.01" required class="w-full block p-2 mt-2 text-sm rounded shadow border border-gray-300" />
            <select name="payment_method" id="payment_method" class="w-full block p-2 mt-2 text-sm rounded shadow border border-gray-300" >
                <option value="card_payment">Carte bancaire</option>
                <option value="atm_withdraw">Retrait DAB / ATM</option>
                <option value="atm_deposit">Dépôt DAB / ATM</option>
                <option value="transfer_in">Transfert entrant</option>
                <option value="transfer_out">Transfert sortant</option>
                <option value="cheque">Chèque</option>
                <option value="direct_debit">Prélèvement</option>
            </select>
            <select name="category_id" id="category_id" class="w-full block p-2 mt-2 text-sm rounded shadow border border-gray-300" >
                @foreach(\App\Models\TransactionCategory::all() as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <select name="account_id" id="account_id" class="w-full block p-2 mt-2 text-sm rounded shadow border border-gray-300" >
                @foreach(\App\Models\CashAccount::all() as $account)
                    <option value="{{ $account->id }}"> {{ $account->name }} à {{ $account->getBank->name }}</option>
                @endforeach
            </select>
            <button type="submit" class="mt-2 bg-green-600 font-bold px-3 py-2 rounded text-sm text-white"><i class="fa fa-check mr-2"></i> Ajouter</button>
        </form>
    </div>

@endsection
