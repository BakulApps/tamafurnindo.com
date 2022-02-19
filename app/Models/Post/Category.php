<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table        = 'post_entity__categories';
    protected $fillable     = ['category_id', 'category_name', 'category_desc'];
    protected $primaryKey   = 'category_id';
    public $timestamps      = false;
}
