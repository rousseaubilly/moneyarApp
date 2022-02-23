<?php

namespace App\Http\Controllers\TransactionCategory;

use App\Http\Controllers\Controller;
use App\Models\TransactionCategory;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Render template contains the form
     * @return \Illuminate\Contracts\View\View
     */
    public function render(){
        return view('transactions_categories.create');
    }

    /**
     * Save the entry inside the database if every pass the validator
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'color' => ['required', 'string', 'max:11'],
        ]);

        $transaction_category = TransactionCategory::create([
            'name' => $request->name,
            'color_bg' => 'bg-' . $request->color . '-300',
            'color_text' => 'text-' . $request->color . '-500'
        ]);

        return redirect(route('transactions_categories.list'));
    }


}
