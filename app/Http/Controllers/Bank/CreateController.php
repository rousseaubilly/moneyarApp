<?php

namespace App\Http\Controllers\Bank;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Render template contains the form
     * @return \Illuminate\Contracts\View\View
     */
    public function render(){
        return view('bank.create');
    }

    /**
     * Save the entry inside the database if every pass the validator
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'swift_code' => ['required', 'string', 'max:11'],
            'country' => ['required', 'string', 'max:2']
        ]);

        $bank = Bank::create([
            'name' => $request->name,
            'swift_code' => $request->swift_code,
            'country' => $request->country
        ]);

        return redirect(route('banks.list'));
    }


}
