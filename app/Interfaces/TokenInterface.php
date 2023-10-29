<?php

namespace App\Interfaces;

interface TokenInterface
{
    public function get_token($request);
    public function create($request);
}
