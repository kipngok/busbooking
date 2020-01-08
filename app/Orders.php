<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model

{
    //
        protected $fillable = [
    	'id', 'date', 'time', 'ticket_no','user_id','from', 'to', 'status', 'payment_mode', 'is_paid', 'message','cost'
];

public function destinations(){
    return $this->hasOne('App\Destinations','id','to');
 }
 public function user(){
    return $this->hasOne('App\User','id','user_id');
 }


}

 