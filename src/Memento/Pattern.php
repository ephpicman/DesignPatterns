<?php

declare(strict_types=1);

namespace App\Memento;

final class EditorMemento
{
    public function __construct(public readonly string $text)
    {
    }
}

final class Editor
{
    private string $text = '';

    public function write(string $text): void
    {
        $this->text = $text;
    }

    public function save(): EditorMemento
    {
        return new EditorMemento($this->text);
    }

    public function restore(EditorMemento $memento): void
    {
        $this->text = $memento->text;
    }

    public function text(): string
    {
        return $this->text;
    }
}
