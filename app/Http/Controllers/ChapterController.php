<?php

namespace App\Http\Controllers;

use App\Models\Cartoon;
use App\Models\Chapter;
use Illuminate\View\View;

class ChapterController extends Controller
{
    public function show(Cartoon $cartoon, Chapter $chapter): View
    {
        return view('chapters.show', [
            'chapter' => $chapter,
        ]);
    }
}
