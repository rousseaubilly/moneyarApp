<?php

namespace App\Http\Controllers\Bank;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Rendering Routes /settings/banks
     * @return View
     */
    public function render(){
        return view('bank.showList');
    }
}
