<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;


class UsersController extends Controller
{
    //
    public function show(User $user)
    {

        return view('users.show',compact('user'));
    }

    public function update(UserRequest $request,User $user)
    {
        $this->authorize('update', $user);
        $user->update($request->all());
        return redirect()->route('users.show', $user->id)->with('success', '个人资料更新成功！');
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user);
        return view('users.edit',compact('user'));
    }
}
