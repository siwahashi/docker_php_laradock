<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'users';

    protected $fillable = [
        'name',
        'age',
        'gmail',
        'pu_mail',
        'password',
        'created_at',
        'update_at',
        'deleted_at',
        'lats_login_at',
        'password_updated_at',
    ];
}
