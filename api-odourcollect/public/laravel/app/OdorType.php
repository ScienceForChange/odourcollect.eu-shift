<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class OdorType extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'id_odor_parent_type', 'name', 'slug', 'icon', 'color',
    ];

    /**
     * The attributes that are translatable.
     *
     * @var array
     */
    protected $translatable = [
        'name', 'slug',
    ];

    /* 1 - 1 RELATIONS */
    public function parent()
    {
        return $this->hasOne(\App\OdorParentType::class, 'id', 'id_odor_parent_type');
    }

    public function scopeParents($query, $ids)
    {
        if (! empty($ids)) {
            $query->whereIn('id_odor_parent_type', $ids);
        }
    }
}
