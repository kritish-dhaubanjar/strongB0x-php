<?php

namespace App\Models\Sales;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvoiceItem extends Model
{
    use SoftDeletes;

    protected $fillable = ['invoice_id', 'item_id', 'name', 'quantity', 'total','price', 'tax_id', 'tax'];

    protected $casts = [
        'item_id' => 'int',
        'invoice_id' => 'int',
        'tax_id' => 'int'
    ];

    public function invoice(){
        return $this->belongsTo('App\Models\Sales\Invoice');
    }

    public function item(){
        return $this->belongsTo('App\Models\Item');
    }

    public function tax(){
        return $this->belongsTo('App\Models\Tax');
    }
}
