<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{	
	//protected $table = 'some_table'; 
    //protected $fillable = ['name','obs'];
    //protected $primaryKey = 'key';
    //protected $connection = 'sqlite';
    //public $timestamps = false;
    //protected $dates = ['created_at','updated_at','some_other_date'];

    protected $guarded = ['id','created_at','updated_at'];

    protected $casts [
    	'name' => 'string',
    	'obs' => 'string'
    ];

    public function setNameAttribute($value)
    {
    	$this->attributes['name'] = strtoupper($value);
    }

    public function getNameAttribute($value)
    {
    	return strtolower($value);
    }
}
