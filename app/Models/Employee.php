<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
        public $fillable = ['Firstname', 'Lastname','company_id', 'email','phone', ];
public function Company(){
return $this->belongsTo('App\Models\Company');
}
}
