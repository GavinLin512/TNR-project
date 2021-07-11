<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $assistant_category_id
 * @property string $img
 * @property string $title
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 */
class Diary extends Model
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
    protected $fillable = ['assistant_category_id', 'img', 'title', 'content', 'created_at', 'updated_at'];

    public function assistantCategory()
    {
        return $this->hasOne('App\AssistantCategory', 'id', 'assistant_category_id');
    }

}
