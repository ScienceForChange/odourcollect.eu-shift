<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Comment extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'id_odor', 'id_user', 'comment',
    ];

    /**
     * The attributes that are translatable.
     *
     * @var array
     */
    protected $translatable = [
        'comment',
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

    public function user()
    {
        return $this->hasOne(\App\User::class, 'id', 'id_user');
    }
}
