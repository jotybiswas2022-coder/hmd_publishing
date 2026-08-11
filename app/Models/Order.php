<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_number',
        'customer_name',
        'email',
        'country',
        'website',
        'plan_key',
        'plan_name',
        'plan_price',
        'addons',
        'addon_total',
        'total',
        'currency',
        'payment_method',
        'billing_first_name',
        'billing_last_name',
        'billing_address',
        'billing_city',
        'billing_postal_code',
        'status',
    ];

    protected $casts = [
        'addons'    => 'array',
        'plan_price' => 'float',
        'addon_total' => 'float',
        'total'     => 'float',
    ];

    public const STATUSES = ['pending', 'paid', 'processing', 'completed', 'cancelled'];
}
