<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Newsletter extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'email', 'type', 'accepted', 'mailchimp_sync',
    ];

    public function scopeEmail($query, $email)
    {
        if ($email != '') {
            $query->where('email', 'LIKE', '%'.$email.'%');
        }
    }
}
