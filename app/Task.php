<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
    	'name',
    	'deadline',
    	'category_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}

