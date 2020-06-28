<?php

namespace App\Model;

use App\Model\Reviews;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function reviews()
    {
        return $this->hasMany(Reviews::class);
    }
}
