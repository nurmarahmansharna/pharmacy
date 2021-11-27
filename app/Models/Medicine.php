<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function type(){
        
        return $this->belongsTo(Type::class);
    
        }
         public function generic(){
        
            return $this->belongsTo(Generic::class);
        
            }
}
