<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function admin(){
        return $this->belongsTo(User::class, 'admin_id', 'id');
    }
    public function amount(){
        return $this->hasMany(Amount::class,'branch_id','id');
    }
    public function expense(){
        return $this->hasMany(Expense::class,'branch_id','id');
    }
    public function donation(){
        return $this->hasMany(Donation::class,'branch_id','id');
    }
    public function staff(){
        return $this->hasMany(Staff::class, 'branch_id', 'id');
    }
}