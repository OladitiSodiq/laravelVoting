<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidate extends Model
{
    //

    protected $table = 'candidate';

    protected $fillable = [
    	'name', 'email', 'username', 'file', 'position'
    ];

  
}
