<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    public function view($username)
    {
        $user = User::whereUsername($username)->firstOrFail();

// get prev user data
        $prev = User::where('id', '<', $user->id)
            ->orderBy('id', 'DESC')
            ->first();

// get next user data
        $next = User::where('id', '>', $user->id)
            ->orderBy('id', 'ASC')
            ->first();

        return view('user.view', compact('user', 'next', 'prev'));
    }

}
