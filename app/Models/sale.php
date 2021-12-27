<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function customer(){
        return $this->belongsto(Customer::class,'customer_id','id');
    }
}
