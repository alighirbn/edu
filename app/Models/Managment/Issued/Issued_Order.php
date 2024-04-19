<?php

namespace App\Models\Managment\Issued;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;


class Issued_Order extends Model
{
    use HasFactory;
    protected $table = 'issued_orders';

    public function issued_orderable(): MorphTo
    {
        return $this->morphTo();
    }

    protected $fillable = [
        'url_address',
        'issued_facility_id',
        'order_number',
        'order_date',
        'issued_orderable_id',
        'issued_orderable_type',

    ];
}
