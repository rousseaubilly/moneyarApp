<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = "transactions";

    protected $fillable = ['payment_method', 'amount', 'origin', 'description', 'account_id'];

    public function getCashAccount(){
        return $this->hasOne('App\Models\CashAccount', 'id', 'account_id');
    }
}
