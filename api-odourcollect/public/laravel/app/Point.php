<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Point extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'id_zone', 'slug', 'latitude', 'longitude',
    ];

    /** FILTERS **/
    public function scopeZone($query, $zone)
    {
        if ($zone != '') {
            $query->where('id_zone', $zone);
        }
    }
}
