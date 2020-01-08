<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destinations extends Model
{
    //
       protected $fillable = [
    	'id', 'from', 'to','time', 'distance', 'fare'
 ];

 
}
     