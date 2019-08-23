<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salestable extends Model
{
    public function product()
    {
    	return $this->hasMany(producttable::class);
    }
}
