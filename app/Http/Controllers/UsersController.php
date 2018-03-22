<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller{
    public function create(){
        return view('users.create');
    }

    // 个人信息中心 依赖注入，隐性路由模型绑定
    public function show(User $user){
        return view('users.show',compact('user'));
    }

}
