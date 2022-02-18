<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table        = 'product_entity__items';
    protected $fillable     = [
        'item_id',
        'item_title',
        'item_desc',
        'item_price',
        'item_discount',
        'item_star',
        'item_sku',
        'item_image',
        'item_weight',
        'item_dimension',
        'item_material',
        'item_info',
        'item_category',
        'item_tag',
        'item_new',
    ];
    protected $primaryKey   = 'item_id';
    public $timestamps      = false;

    public function image()
    {
        return json_decode($this->item_image);
    }

    public function category()
    {
        return $this->hasOne(
            Category::class,
            'category_id',
            'item_category'
        );
    }

    public function tag($col)
    {
        for ($i=0;$i<count(json_decode($this->item_tag));$i++){
            $tag[] = Tag::where('tag_id', $this->item_tag[$i])->value($col);
        }
        return $tag;
    }
}
