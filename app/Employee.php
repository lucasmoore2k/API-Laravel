<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
     protected $fillable = [
        'name',
        'position',
        'email',
        'phone',
        'admission',
        'company_id'
    ];


     public function scopeByCompany($query,$company)
    {
        return $query->where('company_id',$company);
    }

      public function company(){
         return $this->belongsTo('App\Company','company_id','id');
    }
}
