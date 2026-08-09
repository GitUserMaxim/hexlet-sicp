<?php

namespace App\Helpers;

use App\Models\Comment;

class CommentHelper
{
    /**
     * @throws \Exception
     */
    public static function getCommentableUrl(Comment $comment): string
    {
        $route = match ($comment->commentable_type) {
            \App\Models\Chapter::class => 'chapters.show',
            \App\Models\Exercise::class => 'exercises.show',
            default => throw new \Exception('Invalid commentable type'),
        };

        return route($route, $comment->commentable);
    }
}
