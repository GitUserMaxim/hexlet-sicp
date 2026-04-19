<?php

namespace App\Presenters;

use App\Models\Exercise;
use Hemp\Presenter\Presenter;
use Symfony\Component\Yaml\Yaml;

/**
 * @mixin Exercise
 * @property-read string $underscorePath
 * @property-read string $title
 * @property-read string $fullTitle
 */
class ExercisePresenter extends Presenter
{
    public function getUnderscorePathAttribute(): string
    {
        return str_replace('.', '_', $this->path);
    }

    public function getTitleAttribute(): string
    {
        $underscoredPath = $this->underscorePath;
        $locale          = app()->getLocale();
        $path            = resource_path("exercises/{$underscoredPath}/description-{$locale}.yml");

        if (!file_exists($path)) {
            return '';
        }

        $data = Yaml::parseFile($path);
        return $data['name'] ?? '';
    }

    public function getFullTitleAttribute(): string
    {
        $path          = $this->path;
        $exerciseTitle = $this->title;
        return "$path $exerciseTitle";
    }
}