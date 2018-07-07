<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cersai extends Model
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
