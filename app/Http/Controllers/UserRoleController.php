<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserRoleController extends Controller
{
    public function getUserRoles($userId)
    {
        $user = User::all();
        $roles = $user->roles;

        return view('user_roles', compact('user', 'roles'));
    }
}
