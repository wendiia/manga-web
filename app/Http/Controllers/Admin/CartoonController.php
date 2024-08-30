<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CartoonStoreRequest;
use App\Http\Requests\CartoonUpdateRequest;
use App\Models\Cartoon;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CartoonController extends AdminController
{
    public function index(): View
    {
        return view('admin.cartoons.index', ['cartoons' => Cartoon::all()]);
    }

    public function create(): View
    {
        return view('admin.cartoons.create', ['categories' => Category::all()]);
    }

    public function edit(Cartoon $cartoon): View
    {
        return view('admin.cartoons.edit', ['cartoon' => $cartoon, 'categories' => Category::all()]);
    }

    public function store(CartoonStoreRequest $request): RedirectResponse
    {
        Cartoon::create($request->all());
        return redirect()->route('admin.cartoons.index');
    }

    public function update(Cartoon $cartoon, CartoonUpdateRequest $request): RedirectResponse
    {
        $cartoon->update($request->all());
        return redirect()->route('admin.cartoons.index');
    }

    public function destroy(Cartoon $cartoon): RedirectResponse
    {
        $cartoon->delete();
        return redirect()->route('admin.cartoons.index');
    }
}
