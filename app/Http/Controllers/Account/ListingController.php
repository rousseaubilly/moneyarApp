<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\CashAccount;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function render(){

        $cash_accounts = CashAccount::all();

        return view('accounts.showList', [
            'cash_accounts' => $cash_accounts
        ]);
    }
}
