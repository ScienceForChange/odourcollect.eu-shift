<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Zone extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'slug', 'address', 'address__mapbox_id', 'postal_code', 'postal_code__mapbox_id', 'place', 'place__mapbox_id', 'region', 'region__mapbox_id', 'country', 'country__mapbox_id', 'latitude', 'longitude',
    ];

    /**
     * The attributes that are translatable.
     *
     * @var array
     */
    protected $translatable = [
        'name', 'slug', 'address', 'place', 'region', 'country',
    ];

    /* RELACIONS 1-N */
    public function points()
    {
        return $this->hasMany(\App\Point::class, 'id_zone', 'id');
    }

    /* RELACIONS N-M */
    public function users()
    {
        return $this->belongsToMany(\App\User::class, 'user_zones', 'id_zone', 'id_user')->withTimestamps();
    }

    public function odors()
    {
        return $this->belongsToMany(\App\Odor::class, 'odor_zones', 'id_zone', 'id_odor')->withTimestamps();
    }

    public function pointsOfInterest()
    {
        return $this->belongsToMany(\App\PointOfInterest::class, 'point_of_interest_zones', 'id_zone', 'id_point_of_interest')->withTimestamps();
    }
}
