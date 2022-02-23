<?php

namespace App\Http\Controllers\Account\Transaction;

use App\Http\Controllers\Controller;
use App\Models\CashAccount;
use App\Models\Transaction;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    /**
     * @param int $account_id
     * @return \Illuminate\Contracts\View\View
     */
    public function render(int $account_id){

        $account = CashAccount::findOrFail($account_id);
        $transactions = Transaction::where('account_id', $account->id)->get();

        return view('accounts.transactions.show', [
            'account' => $account,
            'transactions' => $transactions
        ]);
    }
}
