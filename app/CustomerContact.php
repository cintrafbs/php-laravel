<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerContact extends Model
{
    protected $table = 'customer_contacts';
    protected $fillable = [
        'customer_id',
        'postcode',
        'address',
        'number',
        'complement',
        'district',
        'city',
        'state',
        'phone',
        'cell'
    ];

    public function customer() {
        return $this->belongsTo(Customer::class);
    }
}
