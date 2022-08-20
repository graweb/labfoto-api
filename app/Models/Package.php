<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'enterprise_id',
        'name',
        'amount',
        'amount_full',
        'payment_method',
        'pendrive',
        'online',
        'description',
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
