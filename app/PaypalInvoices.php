<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaypalInvoices extends Model
{

    const STATE_PENDING = 'pending';

    const STATE_CANCELED = 'canceled';

    const STATE_PAID = 'paid';
    /**
     * @var array
     */
    protected $fillable = [
        'user_id', 'payment_id', 'name', 'price', 'silk', 'state'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getUser()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
