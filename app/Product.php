<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $product_category_id
 * @property string $img
 * @property string $name
 * @property int $price
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 */
class Product extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['product_category_id', 'img', 'name', 'price', 'content', 'created_at', 'updated_at'];

}
