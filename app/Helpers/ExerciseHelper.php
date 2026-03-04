<?php

namespace App\Helpers;

use App\Models\Exercise;
use Illuminate\Support\Facades\App;
use Symfony\Component\Yaml\Yaml;

class ExerciseHelper
{
    public static function getExerciseDescription(Exercise $exercise): string
    {
        $viewName = $exercise->present()->underscorePath;
        $locale   = App::getLocale();
        $path     = resource_path("exercises/{$viewName}/description-{$locale}.yml");

        if (!file_exists($path)) {
            return '';
        }

        $data = Yaml::parseFile($path);
        return $data['description'] ?? '';
    }

    public static function getExerciseOriginLink(Exercise $exercise): ?string
    {
        $links = require resource_path('exercise-links.php');
        $link  = $links[$exercise->path];
        return $link;
    }
}
