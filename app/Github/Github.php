<?php

namespace App\Github;

use Github\Api\Gists;
use Github\Client;

class Github implements GithubInterface
{
    public function __construct(private Client $githubClient)
    {
    }

    public function gists(): Gists
    {
        return $this->githubClient->api('gists');
    }
}
