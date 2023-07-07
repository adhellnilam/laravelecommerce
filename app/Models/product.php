<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'picture','product_name','description','price','stock','categorie_id'
    ];

    public function category(){
        return $this->belongsTo(categorie::class,'categorie_id','id');
    }

    public function transaction(){
        return $this->hasOne(transaction::class,'product_id','id');
    }
}
