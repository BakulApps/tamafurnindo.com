<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table        = 'product_entity__categories';
    protected $fillable     = ['category_name', 'category_desc'];
    protected $primaryKey   = 'category_id';
    public $timestamps      = false;
}
