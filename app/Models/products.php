<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $guarded;
    public function category()
    {
        return $this->belongsTo(categorys::class,'cat_id','id');
    }
}

