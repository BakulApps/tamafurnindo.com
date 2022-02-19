<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table        = 'post_entity__comments';
    protected $fillable     = [
        'comment_id',
        'comment_parent',
        'comment_author',
        'comment_email',
        'comment_subject',
        'comment_message',
        'comment_image',
    ];
    protected $primaryKey   = 'comment_id';
    public $timestamps      = false;
}
