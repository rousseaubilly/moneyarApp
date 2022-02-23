<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashAccount extends Model
{
    use HasFactory;

    protected $table = "cash_accounts";
    protected $fillable = ['name','account_number','type','bank_id','balance','currency','description'];

    public function getBank(){
        return $this->hasOne('App\Models\Bank', 'id', 'bank_id');
    }

    public function formattedBalance(){
        return number_format($this->balance / 100, 2, ',', ' ') . ' €';
    }
}
