<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name'
    ];

    public function produk(){
        return $this->hasMany(product::class,'categorie_id','id');
    }

    public function transaction(){
        return $this->hasOne(transaction::class);
    }
}
