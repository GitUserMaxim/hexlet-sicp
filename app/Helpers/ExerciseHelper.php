<?php

namespace App\Helpers;

use App\Models\Exercise;
use Illuminate\Support\Facades\App;

class ExerciseHelper
{
    public static function getExerciseDescription(Exercise $exercise): string
    {
        $viewName = $exercise->present()->underscorePath;
        $locale   = App::getLocale();
        $path     = resource_path("exercises/{$viewName}/description-{$locale}.md");

        if (!file_exists($path)) {
            return '';
        }

        return file_get_contents($path);
    }

    public static function getExerciseOriginLink(Exercise $exercise): ?string
    {
        $links = require resource_path('exercise-links.php');
        $link  = $links[$exercise->path];
        return $link;
    }
}