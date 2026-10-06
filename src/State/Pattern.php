<?php

declare(strict_types=1);

namespace App\State;

interface State
{
    public function publish(): string;
}

final class DraftState implements State
{
    public function publish(): string
    {
        return 'published';
    }
}

final class PublishedState implements State
{
    public function publish(): string
    {
        return 'already published';
    }
}

final class Post
{
    private State $state;

    public function __construct()
    {
        $this->state = new DraftState();
    }

    public function publish(): string
    {
        $result = $this->state->publish();
        if ($this->state instanceof DraftState) {
            $this->state = new PublishedState();
        }
        return $result;
    }
}
