<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchasetable extends Model
{
      public function purchase()
    {
    	return $this->hasMany(producttable::class);
    }
}
