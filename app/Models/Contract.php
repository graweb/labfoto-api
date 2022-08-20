<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'enterprise_id',
        'customer_id',
        'package_id',
        'service_type',
        'professionals_total',
        'event_type',
        'event_address',
        'event_date',
        'event_time',
        'registry',
        'registry_address',
        'registry_date',
        'registry_time',
        'church',
        'church_address',
        'church_date',
        'church_time',
        'reception',
        'reception_address',
        'reception_date',
        'reception_time',
        'making_of',
        'making_of_address',
        'making_of_date',
        'making_of_time',
        'album_size',
        'album_type',
        'album_blade',
        'delivery_type',
        'example_photos',
        'album_case',
        'box_case',
        'trial_photos',
        'woman_day',
        'man_day',
        'debutante_day',
        'drone_photos',
        'external_team',
        'status_board',
        'signed',
        'signed_at',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $appends = [
        'service_type_name',
    ];

    const SERVICE_TYPE_ONLY_WEDDING_RELIGIOUS = 1;
    const SERVICE_TYPE_WEDDING_RECEPTION = 2;
    const SERVICE_TYPE_ONLY_CIVIL = 3;
    const SERVICE_TYPE_WEDDING_RELIGIOUS_SAME_PLACE = 4;
    const SERVICE_TYPE_WEDDING_RELIGIOUS_DIFFERENT_PLACE = 5;
    const SERVICE_TYPE_CHURCH_BAPTIZED = 6;
    const SERVICE_TYPE_CHILDREN_BITHDAY = 7;
    const SERVICE_TYPE_RECEPTION_BAPTIZED = 8;
    const SERVICE_TYPE_CIVIL_AND_RECEPTION = 9;
    const SERVICE_TYPE_CORPORATE = 10;
    const SERVICE_TYPE_DEBUTANTE_BITHDAY = 11;

    public static $serviceTypes = [
        self::SERVICE_TYPE_ONLY_WEDDING_RELIGIOUS => 'Somente Casamento Religioso',
        self::SERVICE_TYPE_WEDDING_RECEPTION => 'Recepção Casamento',
        self::SERVICE_TYPE_ONLY_CIVIL => 'Somente Civil',
        self::SERVICE_TYPE_WEDDING_RELIGIOUS_SAME_PLACE => 'Casamento e Recepção no Mesmo Local',
        self::SERVICE_TYPE_WEDDING_RELIGIOUS_DIFFERENT_PLACE => 'Casamento e Recepção em Locais Diferentes',
        self::SERVICE_TYPE_CHURCH_BAPTIZED => 'Batizado Igreja',
        self::SERVICE_TYPE_CHILDREN_BITHDAY => 'Aniversário Infantil',
        self::SERVICE_TYPE_RECEPTION_BAPTIZED => 'Batizado e Recepção',
        self::SERVICE_TYPE_CIVIL_AND_RECEPTION => 'Civil e Recepção',
        self::SERVICE_TYPE_CORPORATE => 'Corporativo',
        self::SERVICE_TYPE_DEBUTANTE_BITHDAY => 'Aniversário Debutante',
    ];

    public function getServiceTypeNameAttribute()
    {
        return $this->service_type ? self::$serviceTypes[$this->service_type] : '';
    }

    public function enterprise()
    {
        return $this->belongsTo(Enterprise::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
