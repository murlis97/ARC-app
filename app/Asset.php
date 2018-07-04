<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $guarded = ['id'];

    public function nongroup()
    {
        return $this->hasOne(NonGroupAsset::class);
    }

    public function group(){
        return $this->hasMany(GroupAsset::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
