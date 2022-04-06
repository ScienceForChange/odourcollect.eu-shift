<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Like extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'id_user', 'id_odor', 'id_like_type',
    ];

    /** FILTERS **/
    public function scopeUser($query, $user)
    {
        if ($user != '') {
            $query->where('id_user', $user);
        }
    }

    public function scopeOdor($query, $odor)
    {
        if ($odor != '') {
            $query->where('id_odor', $odor);
        }
    }
}
