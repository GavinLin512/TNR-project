<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $img
 * @property string $title
 * @property string $publish_date
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 */
class News extends Model
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
    protected $fillable = ['img', 'title', 'publish_date', 'content', 'created_at', 'updated_at'];

}
