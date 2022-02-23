<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionCategory extends Model
{
    use HasFactory;

    protected $table = "transactions_categories";

    protected $fillable = ['name', 'color_bg', 'color_text'];

    public function nameFormatted(){
        return "<span class='rounded px-2 py-1 {$this->color_bg} {$this->color_text}'>{$this->name}</span>";
    }
}
