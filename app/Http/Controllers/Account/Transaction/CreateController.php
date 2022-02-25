<?php

namespace App\Http\Controllers\Account\Transaction;

use App\Http\Controllers\Controller;
use App\Models\CashAccount;
use App\Models\Transaction;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Render the view of the form to create a transaction
     * @return \Illuminate\Contracts\View\View
     */
    public function render(){
        return view('accounts.transactions.create');
    }

    public function store(Request $request){


        $request->validate([
            'origin' => ['required', 'string', 'max:255'],
            'description' => ['string', 'max:100'],
            'amount' => ['required', 'numeric'],
            'payment_method' => ['required', 'string'],
            'category_id' => ['required', 'numeric'],
            'account_id' => ['required', 'numeric'],
            'charged_at' => ['required', 'date_format:Y-m-d\TH:i'],
        ]);

        // Create the transaction

        $transaction = Transaction::create([
            'charged_at' => strtotime($request->charged_at),
            'origin' => $request->origin,
            'description' => $request->description,
            'amount' => $request->amount * 100,
            'payment_method' => $request->payment_method,
            'category_id' => $request->category_id,
            'account_id' => $request->account_id,
        ]);

        // Update the balance of the account

        $account = CashAccount::find($request->account_id);
        $account->balance += ($request->amount * 100);
        $account->save();


        return redirect(route('accounts.transactions.show', [
            'account_id' => $request->account_id
        ]));
    }


}
