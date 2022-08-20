<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Additional extends Model
{
    use HasFactory;

    protected $fillable = [
        'enterprise_id',
        'name',
        'price',
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
}
