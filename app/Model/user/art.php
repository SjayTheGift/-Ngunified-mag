<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class art extends Model
{
    public function posts()
    {
    	
    }

    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
