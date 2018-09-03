<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    //
     protected $primaryKey = "id";
     protected $table = 'user_profile';
	 protected $fillable = [
        'name', 'surname', 'email', 'user_id'
    ];
    
public function users(){
  return $this->belongsToMany('App\User');
}

}
