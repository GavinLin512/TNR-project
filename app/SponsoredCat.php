<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property int $user_id
 * @property int $default_people
 * @property string $video_url
 * @property string $created_at
 * @property string $updated_at
 * @property string $sponsor
 */
class SponsoredCat extends Model
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
    protected $fillable = ['name', 'user_id', 'default_people', 'video_url', 'created_at', 'updated_at', 'sponsor'];

    // public function user()
    // {
    //     return $this->hasOne('App\User', 'id', 'user_id');
    // }

    public function client()
    {
        return $this->hasOne('App\UserClient', 'user_id', 'user_id');
    }

}
