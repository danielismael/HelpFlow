<?php

namespace App\Repositories;

use App\Interfaces\UserInterface;
use App\Models\User;

class UserRepository implements UserInterface
{
    public function get_email($request) {
        return User::where('email', $request)->first();
    }

    public function update($id, $request) : bool
    {
        User::find($id)->update($request);
        return true;
    }
}
