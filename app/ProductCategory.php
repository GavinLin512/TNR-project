<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $category
 * @property string $created_at
 * @property string $updated_at
 */
class ProductCategory extends Model
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
    protected $fillable = ['category', 'created_at', 'updated_at'];

    public function products()
    {
        return $this->hasMany('App\Product', 'product_category_id', 'id');
    }

}
