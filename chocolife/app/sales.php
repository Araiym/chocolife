<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
    public $table='sales';
    public $primaryKey='id_sales';
    public $timestamps=false;

    public function pictures(){
    	return $this->hasOne('App\pictures','id_sales');
    }
    public function sales(){
    	return $this->belongsTo('App\sales','id_sales');
    }
}
