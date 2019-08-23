<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producttable extends Model
{
    public function purchase()
    {
    	return $this->belongsTo(purchasetable::class);
    }
     public function sales()
    {
    	return $this->belongsTo(salestable::class);
    }
}
