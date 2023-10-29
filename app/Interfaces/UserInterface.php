<?php

namespace App\Interfaces;

interface UserInterface
{
    public function get_email($request);
    public function update($id, $request);
}
