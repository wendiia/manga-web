<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\View;

abstract class Controller
{
    public function __construct()
    {
        //todo подумать
        View::share('user', \Request::user());
        View::share('categories', Category::all());
    }
}
