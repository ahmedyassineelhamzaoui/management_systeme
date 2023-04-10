<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=['reference','nom','quantite','prix','marque_id','category_id'];

    public function Marques(){
        return $this->belongsTo(Marque::class);
    }
    public function Categories(){
        return $this->belongsTo(Category::class);
    }
    
}
