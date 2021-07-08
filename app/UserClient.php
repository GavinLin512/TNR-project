<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $user_id
 * @property string $nickname
 * @property string $phone
 * @property string $address
 * @property string $created_at
 * @property string $updated_at
 */
class UserClient extends Model
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
    protected $fillable = ['user_id', 'nickname', 'phone', 'address', 'created_at', 'updated_at'];

    public function client()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

}
