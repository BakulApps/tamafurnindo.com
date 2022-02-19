<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table        = 'post_entity__articles';
    protected $fillable     = [
        'article_title',
        'article_content',
        'article_image',
        'article_category',
        'article_tag',
        'article_author',
        'article_is_commented',
        'article_comment',
    ];
    protected $primaryKey   = 'article_id';
}
