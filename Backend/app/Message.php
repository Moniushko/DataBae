<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
	// sender of message
	 public function creator(){
        return $this->belongsTo(User::class, 'fromID');
    }
	 public function reciever() {
		return $this->belongsTo(User::class, 'toID');
    }
	
}
