<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table        = 'entity__companies';
    protected $fillable     = [
        'company_name',
        'company_tagline',
        'company_desc',
        'company_address',
        'company_website',
        'company_phone',
        'company_email',
        'company_facebook',
        'company_tumblr',
        'company_twitter',
        'company_instagram',
        'company_google',
        'company_youtube'
    ];
    protected $primaryKey   = 'company_id';
    public $timestamps      = false;
}
