<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $table        = 'post_entity__tags';
    protected $fillable     = ['tag_id', 'tag_name', 'tag_desc'];
    protected $primaryKey   = 'tag_id';
    public $timestamps      = false;
}
