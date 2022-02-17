<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $table        = 'product_entity__tags';
    protected $fillable     = ['tag_name', 'tag_desc'];
    protected $primaryKey   = 'tag_id';
    public $timestamps      = false;
}
