<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  protected $fillable = [
    'company_name', 'company_email', 'company_position', 'company_location', 'company_phone', 'ae_address', 'bank_name', 'baccount_name', 'baccount_no'
];
}
