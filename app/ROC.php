<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ROC extends Model
{
    protected $guarded = ['id'];

    public function gasset()
    {
        return $this-> belongsTo(GroupAsset::class);
    }

    public function ngasset()
    {
        return $this-> belongsTo(NonGroupAsset::class);
    }
}
