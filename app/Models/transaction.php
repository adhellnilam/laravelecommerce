<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id','category_id','user_id','admin_id','quantity','payment'
    ];

    public function product(){
        return $this->belongsTo(product::class,'product_id','id');
    }

    public function category(){
        return $this->belongsTo(categorie::class,'category_id','id');
    }

    public function user(){
        return $this->belongsTo(user::class,'user_id','id');
    }

    public function admin(){
        return $this->belongsTo(admin::class,'admin_id','id');
    }
}
