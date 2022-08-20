<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'enterprise_id',
        'contract_responsible',
        'couple_name',
        'document',
        'phone_a',
        'phone_b',
        'district',
        'address',
        'email',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function enterprise()
    {
        return $this->belongsTo(Enterprise::class);
    }

    public function contract()
    {
        return $this->hasMany(Contract::class);
    }
}
