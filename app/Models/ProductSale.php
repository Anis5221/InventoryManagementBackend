<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSale extends Model
{
    use HasFactory;
    protected $fillable = ["invoice_no","customer_name","customer_phone","total_amount"];

    public function itemsalse () {
        return $this->hasMany(ItemSale::class, "invoice_id", "invoice_no");
    }
}
