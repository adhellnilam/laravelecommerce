<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'username','email','password','phone_number'
    ];

    public function transaction(){
        return $this->hasOne(transaction::class,'admin_id','id');
    }
}
