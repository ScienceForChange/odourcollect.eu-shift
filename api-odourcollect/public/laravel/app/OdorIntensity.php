<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class OdorIntensity extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'power', 'name', 'slug',
    ];

    /**
     * The attributes that are translatable.
     *
     * @var array
     */
    protected $translatable = [
        'name', 'slug',
    ];
}
