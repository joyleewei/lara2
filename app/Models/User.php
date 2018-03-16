<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // post 数据时，能够入库的字段
    // Laravel 在用户模型中默认为我们添加了 fillable 在过滤用户提交的字段，只有包含在该属性中的字段才能够被正常更新
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // 以json 形式展示时，隐藏的字段。
    // 当我们需要对用户密码或其它敏感信息在用户实例通过数组或 JSON 显示时进行隐藏，则可使用 hidden 属性
    protected $hidden = [
        'password', 'remember_token',
    ];
}
