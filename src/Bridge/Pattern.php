<?php

declare(strict_types=1);

namespace App\Bridge;

interface Renderer
{
    public function render(string $title): string;
}

final class HtmlRenderer implements Renderer
{
    public function render(string $title): string
    {
        return '<h1>' . $title . '</h1>';
    }
}

abstract class Page
{
    public function __construct(protected readonly Renderer $renderer)
    {
    }

    abstract public function output(): string;
}

final class ArticlePage extends Page
{
    public function output(): string
    {
        return $this->renderer->render('Article');
    }
}
