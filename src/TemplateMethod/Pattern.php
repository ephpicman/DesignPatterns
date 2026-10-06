<?php

declare(strict_types=1);

namespace App\TemplateMethod;

abstract class DataImporter
{
    final public function import(string $source): string
    {
        $data = $this->read($source);
        return $this->transform($data);
    }

    abstract protected function read(string $source): string;

    protected function transform(string $data): string
    {
        return strtoupper($data);
    }
}

final class CsvImporter extends DataImporter
{
    protected function read(string $source): string
    {
        return 'csv:' . $source;
    }
}
