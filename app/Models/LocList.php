<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LocList extends Model
{
    protected $table = 'loclists';

    public $timestamps = false;

    public function scopeProvince()
    {
        return $this->where('type', 1);
    }

    public function scopeCity()
    {
        return $this->where('type', 2);
    }

    public function scopeDistrict()
    {
        return $this->where('type', 3);
    }

    public function parent()
    {
        return $this->belongsTo(LocList::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(LocList::class, 'parent_id');
    }

    public function brothers()
    {
        return $this->parent->children();
    }

    public static function options($id)
    {
        if (!$self = static::find($id)) {
            return [];
        }
        return $self->brothers()->pluck('name', 'id');
    }
}
