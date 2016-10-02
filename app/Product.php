<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $dates = ['added_at'];

    public function setShortNameAttribute($value) {

        $this->attributes['longname'] = $value;

        if(! $this->exists) {
            $this->attributes['shortname'] = str_slug($value);
        }
    }
}
