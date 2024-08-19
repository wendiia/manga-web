<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Support\Facades\View;

abstract class Controller
{
    public function __construct()
    {
        View::share('types', Type::all());
    }
}
