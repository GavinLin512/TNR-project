<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $title
 * @property int $donate_price
 * @property int $people_number
 * @property string $created_at
 * @property string $updated_at
 */
class DonatedCat extends Model
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
    protected $fillable = ['title', 'donate_price', 'people_number', 'created_at', 'updated_at'];

}
