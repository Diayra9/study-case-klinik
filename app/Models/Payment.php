<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payment';

    protected $primaryKey = 'id';

    protected $fillable = [
        'reservation_id',
        'order_id',
        'amount',
        'payment_method',
        'transaction_id',
        'status',
        'payment_gateway_response',
    ];

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
