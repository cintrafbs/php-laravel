<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = [
        'user_id',
        'company',
        'name',
        'cpf_cnpj',
        'rg_ie',
        'email',
        'password'
    ];

    public function contacts()
    {
        return $this->hasMany(CustomerContact::class);
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
