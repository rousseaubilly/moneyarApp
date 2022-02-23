@extends('layouts.app')

@section('seo_title', 'Ajouter un compte (cash)')

@section('content')

    @include('part.page_title', ['title' => '<i class="fa fa-credit-card mr-3"></i> Comptes > Créer un compte'])

    <div class="max-w-xl">
        <form action="" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Nom" required class="w-full block p-2 mt-2 text-sm rounded shadow border border-gray-300" />
            <input type="text" name="description" placeholder="Courte description du compte" class="w-full block p-2 mt-2 text-sm rounded shadow border border-gray-300" />
            <input type="number" name="balance" placeholder="Balance de départ sans le signe € - euro" class="w-full block p-2 mt-2 text-sm rounded shadow border border-gray-300" />
            <input type="text" name="account_number" placeholder="IBAN / Account number" class="w-full block p-2 mt-2 text-sm rounded shadow border border-gray-300" />
            <select name="bank_id" id="bank_id" class="w-full block p-2 mt-2 text-sm rounded shadow border border-gray-300" >
                @foreach(\App\Models\Bank::all() as $bank)
                    <option value="{{ $bank->id }}">{{ $bank->name }}</option>
                @endforeach
            </select>
            <select name="currency" id="currency" class="w-full block p-2 mt-2 text-sm rounded shadow border border-gray-300" >
                <option value="EUR">Euro (€)</option>
            </select>
            <select name="type" id="type" class="w-full block p-2 mt-2 text-sm rounded shadow border border-gray-300" >
                <option value="checking">Compte chèque</option>
                <option value="savings">Livret d'épargne</option>
            </select>
            <button type="submit" class="mt-2 bg-green-600 font-bold px-3 py-2 rounded text-sm text-white"><i class="fa fa-check mr-2"></i> Ajouter</button>
        </form>
    </div>

@endsection
