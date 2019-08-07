<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  protected $fillable = [
    'name', 'email', 'position', 'location', 'phone', 'ae_address', 'bank_name', 'baccount_name', 'baccount_no'
  ];

  public function user(){
    return $this->belongsTo('App\User', 'user_id');
  }
}
