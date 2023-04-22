<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['reference', 'nom', 'quantite','quantiteRelative', 'prix', 'marque_id', 'category_id'];
    
    public function marque()
    {
        return $this->belongsTo(Marque::class);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}
