<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function customer(){
        return $this->belongsto(Customer::class,'customer_id','id');
    }
    public function User()
    {

        return $this->belongsto(User::class,'sale_by','id');
    }
}
