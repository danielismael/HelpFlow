<?php

namespace App\Http\Controllers\Ticket\Ti;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class TiTicketController extends Controller
{
    public function index() : View
    {
        return view('tickets.ti.index');
    }

    public function create() : View
    {
        return view('tickets.ti.create');
    }
}
