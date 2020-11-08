<?php

namespace App\Http\Controllers;

use App\Helpers\ComicHelper;
use App\Http\Controllers\Controller;
use App\Models\Comic;
use App\Models\Post;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        $comic = Comic::orderBy('id', 'desc')->first();

        return view('home')
            ->with('comic', $comic)
            ->with('url', config('geekplusplus.url').'/'.$comic->id)
            ->with('url_next', config('geekplusplus.url').'/'.ComicHelper::next($comic))
            ->with('url_previous', config('geekplusplus.url').'/'.ComicHelper::previous($comic));
    }

    public function show(Request $request, int $comicId)
    {
        try {
            $comic = Comic::findOrFail($comicId);
        } catch (ModelNotFoundException $e) {
            return redirect('/');
        }

        Comic::find($comic->id)->increment('views');

        return view('home')
            ->with('comic', $comic)
            ->with('url', config('geekplusplus.url').'/'.$comic->id)
            ->with('url_next', config('geekplusplus.url').'/'.ComicHelper::next($comic))
            ->with('url_previous', config('geekplusplus.url').'/'.ComicHelper::previous($comic));
    }

    public function random()
    {
        $comic = Comic::inRandomOrder()->first();

        return redirect('/'.$comic->id);
    }
}
