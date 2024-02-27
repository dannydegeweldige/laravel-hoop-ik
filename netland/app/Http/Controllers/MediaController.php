<?php

namespace App\Http\Controllers;

use App\Models\Media;

class MediaController extends Controller
{
    public function indexFilms()
    {
        $films = Media::where('is_series', false)->get();
        return view('films.index', compact('films'));
    }

    public function indexSeries()
    {
        $series = Media::where('is_series', true)->get();
        return view('series.index', compact('series'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = Media::where('title', 'like', "%$query%")->get();
        return view('search', compact('results'));
    }
}

