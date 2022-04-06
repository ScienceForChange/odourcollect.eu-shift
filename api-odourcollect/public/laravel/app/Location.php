<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Location extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'id_odor', 'address', 'address__mapbox_id', 'postal_code', 'postal_code__mapbox_id', 'place', 'place__mapbox_id', 'region', 'region__mapbox_id', 'country', 'country__mapbox_id', 'latitude', 'longitude',
    ];

    /**
     * The attributes that are translatable.
     *
     * @var array
     */
    protected $translatable = [
        'address', 'place', 'region', 'country',
    ];
}
