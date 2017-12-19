<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table ="bill";
    public function customer()
    {
    	return $this->belongsTo('App\Customer','id_customer','id');
    }
    public function billDetail()
    {
    	return $this->hasMany('App\BillDetail','id_billDetail','id');
    }
}
