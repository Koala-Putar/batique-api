<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batik extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(BatikCategory::class, 'category_id');
    }
}
