<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function amount()
    {
        return $this->hasMany(Amount::class,'branch_id','id');
    }
    public function staff(){
        return $this->hasMany(Staff::class, 'branch_id', 'id');
    }
}
