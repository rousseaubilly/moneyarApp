<?php

namespace App\Http\Controllers\TransactionCategory;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\TransactionCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Rendering Routes /settings/banks
     * @return View
     */
    public function render(){

        $categories = TransactionCategory::all();

        return view('transactions_categories.showList', [
            'transactions_categories' => $categories
        ]);
    }
}
