<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $assistant_category
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

    const assistant_category = [
        'adopted' => '領養',
        'sponsored' => '助養',
        'donated' => '助罐'
    ];

    protected $fillable = ['assistant_category', 'img', 'title', 'content', 'created_at', 'updated_at', 'publish_date'];

}
