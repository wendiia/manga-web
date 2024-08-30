<?php

namespace App\Http\Controllers;

use App\Models\Cartoon;
use Illuminate\View\View;

class CartoonController extends Controller
{
    public function index(): View
    {
        $cartoons = Cartoon::all();
        return view('cartoons', ['cartoons' => $cartoons, 'category' => 'Весь каталог']);
    }

    public function show(Cartoon $cartoon): View
    {
        return view('cartoon', [
            'cartoon' => $cartoon,
        ]);
    }
}
