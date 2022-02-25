<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\CashAccount;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function render(){
        return view('accounts.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'account_number' => ['required', 'string'],
            'type' => ['required', 'string'],
            'bank_id' => ['required', 'numeric'],
            'balance' => ['required', 'numeric'],
            'currency' => ['required', 'string', 'max:3', 'min:3'],
        ]);

        $account = CashAccount::create([
           'name' => $request->name,
           'account_number' => $request->account_number,
           'type' => $request->type,
           'bank_id' => $request->bank_id,
           'balance' => $request->balance * 100,
           'currency' => $request->currency,
           'description' => $request->description
        ]);

        return redirect(route('accounts.list'));
    }
}
