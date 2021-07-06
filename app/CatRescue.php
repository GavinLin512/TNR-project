<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $img
 * @property string $name
 * @property int $age
 * @property boolean $gender
 * @property string $location
 * @property string $content
 * @property string $vaccine
 * @property boolean $adopt
 * @property int $user_id
 * @property string $created_at
 * @property string $updated_at
 */
class CatRescue extends Model
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
    protected $fillable = ['img', 'name', 'age', 'gender', 'location', 'content', 'vaccine', 'adopt', 'user_id', 'created_at', 'updated_at'];

}
