<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pessoas extends Model
{	
	//protected $table = 'some_table'; 
    //protected $fillable = ['name','obs'];
    //protected $primaryKey = 'key';
    //protected $connection = 'sqlite';
    //public $timestamps = false;
    //protected $dates = ['created_at','updated_at','some_other_date'];

    protected $guarded = ['id','created_at','updated_at'];

    protected $dates = ['created_at','updated_at','delete_at'];

    use SoftDeletes;

    protected $casts = [
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

    protected static function boot()
    {
    	parent::boot();

    	static::addGlobalScope('created_at', function(Builder $builder){
    		$builder->where('created_at', '<',Carbon::now()->format('Y-m-d H:i:s'));
    	});
    }

    public function scopeOfType($query, $type)
    {
    	return $query->where('sex', $type);
    }
}
