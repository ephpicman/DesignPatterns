<?php

declare(strict_types=1);

namespace App\Prototype;

final class Document
{
    public function __construct(
        public string $title,
        public array $metadata = [],
    ) {
    }

    public function __clone()
    {
        $this->metadata = [...$this->metadata];
    }
}

final class DocumentRegistry
{
    /** @var array<string, Document> */
    private array $prototypes = [];

    public function add(string $name, Document $document): void
    {
        $this->prototypes[$name] = $document;
    }

    public function create(string $name): Document
    {
        return clone $this->prototypes[$name];
    }
}
