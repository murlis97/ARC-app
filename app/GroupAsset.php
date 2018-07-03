<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupAsset extends Model
{
    protected $guarded = ['id'];

    public function asset()
    {
        return $this-> belongsTo(Asset::class);
    }
}
