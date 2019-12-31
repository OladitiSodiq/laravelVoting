<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class voters extends Model
{
    //

    protected $table = 'users';

    protected $fillable = [
    	'title', 'slug', 'full_price', 'discounted_price', 'quantity', 'short_desc', 'full_desc', 'category', 'view', 'status', 'image', 'created_by', 'last_modified_by'
    ];
}
