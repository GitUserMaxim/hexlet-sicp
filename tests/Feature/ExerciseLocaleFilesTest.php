<?php

namespace Tests\Feature;

use Symfony\Component\Yaml\Yaml;
use Tests\TestCase;

class ExerciseLocaleFilesTest extends TestCase
{
    public function testAllYamlFilesHaveName(): void
    {
        $files = glob(resource_path('exercises/*/description-*.yml'));

        $this->assertNotEmpty($files, 'No exercise YAML files found');

        foreach ($files as $file) {
            $data = Yaml::parseFile($file);

            $this->assertArrayHasKey(
                'name',
                $data,
                "Missing 'name' key in {$file}"
            );

            $this->assertNotEmpty(
                $data['name'],
                "'name' is empty in {$file}"
            );
        }
    }
}
