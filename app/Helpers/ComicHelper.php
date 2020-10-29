<?php

namespace App\Helpers;

use App\Models\Comic;

class ComicHelper
{
    public static function previous(Comic $comic): int
    {
        if ($comic->id == 1) {
            return 1;
        }

        return $comic->id - 1;
    }

    public static function next(Comic $comic): int
    {
        $latestId = Comic::orderBy('id', 'desc')->first()->id;
        if ($comic->id == $latestId) {
            return $latestId;
        }

        return $comic->id + 1;
    }
}
