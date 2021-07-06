<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $assistant_category_id
 * @property string $name
 * @property string $address
 * @property string $created_at
 * @property string $updated_at
 */
class Assistant extends Model
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
    protected $fillable = ['assistant_category_id', 'name', 'address', 'created_at', 'updated_at'];

    public function category()
    {
        return $this->hasOne('App\Assistant_category', 'id', 'assistant_category_id');
    }

}
