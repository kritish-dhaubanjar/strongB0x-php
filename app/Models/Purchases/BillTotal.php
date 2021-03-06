<?php

namespace App\Models\Purchases;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BillTotal extends Model
{
    use SoftDeletes;

    protected $fillable = ['bill_id', 'code', 'amount'];
    
    protected $casts = [
        'bill_id' => 'int',
    ];

    public function bill(){
        return $this->belongsTo('App\Models\Purchases\Bill');
    }
}
