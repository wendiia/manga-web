<?php

namespace App\Http\Controllers;

use App\Models\Title;
use App\Models\Type;
use Illuminate\View\View;

class TittleController extends Controller
{
    public function index(): View
    {
        $titles = Title::all();
        return View('titles', ['titles' => $titles, 'type' => 'Весь каталог']);
    }

    public function show(string $id): View
    {
        if (!empty($type = Type::whereSlug($id)->first())) {
            return $this->indexType($type);
        }

        return view('title', [
            'title' => Title::findOrFail($id),
        ]);
    }

    public function indexType(Type $type): View
    {
        return view('titles', [
            'titles' => $type->titles,
            'type' => $type->name,
        ]);
    }
}
