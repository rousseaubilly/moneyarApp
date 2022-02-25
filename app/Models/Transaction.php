<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = "transactions";

    protected $fillable = ['payment_method', 'amount', 'origin', 'description', 'account_id', 'category_id', 'charged_at'];

    protected $dates = ['created_at', 'updated_at', 'charged_at'];


    public function formattedAmount(){
        return number_format($this->amount / 100, 2, ',', ' ') . ' €';
    }

    public function getCashAccount(){
        return $this->hasOne('App\Models\CashAccount', 'id', 'account_id');
    }

    public function getCategory(){
        return $this->hasOne('App\Models\TransactionCategory', 'id', 'category_id');
    }
}
