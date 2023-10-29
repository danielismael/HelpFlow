<?php

namespace App\Repositories;

use App\Interfaces\TokenInterface;
use App\Models\Token;

class TokenRepository implements TokenInterface
{
    public function get_token($request) {
        return Token::where('token', $request)->first();
    }

    public function create($request){
        return Token::firstOrCreate(
            ['email' => $request['email']],
            ['token' => $request['token']]
        );
    }
}
