<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $category
 * @property string $created_at
 * @property string $updated_at
 */
class AssistantCategory extends Model
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

    public function assistants()
    {
        return $this->hasMany('App\Assistant', 'assistant_category_id', 'id');
    }

}
