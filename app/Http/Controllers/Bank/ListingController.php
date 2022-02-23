<?php

namespace App\Http\Controllers\Bank;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Rendering Routes /settings/banks
     * @return View
     */
    public function render(){

        $banks = Bank::paginate(10);

        return view('bank.showList', [
            'banks' => $banks
        ]);
    }
}
