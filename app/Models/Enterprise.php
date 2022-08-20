<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    use HasFactory;

    protected $fillable = [
        'enterprise_id',
        'name',
        'cnpj',
        'responsible',
        'district',
        'address',
        'email',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function contract()
    {
        return $this->hasMany(Contract::class);
    }

    public function customer()
    {
        return $this->hasMany(Customer::class);
    }

    public function package()
    {
        return $this->hasMany(Package::class);
    }

    public function additional()
    {
        return $this->hasMany(Additional::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
