<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table='invoice';
    protected $fillable=[
        'invoice_number',
        'items_number',
        'VAT',
        'price_befor_VAT',
        'discount',
        'total_price',
        'sales_field',
        'data',
    ];
    
}
