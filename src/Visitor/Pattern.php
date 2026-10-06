<?php

declare(strict_types=1);

namespace App\Visitor;

interface Visitor
{
    public function visitBook(Book $book): string;

    public function visitMovie(Movie $movie): string;
}

interface Item
{
    public function accept(Visitor $visitor): string;
}

final class Book implements Item
{
    public function __construct(public readonly string $title)
    {
    }

    public function accept(Visitor $visitor): string
    {
        return $visitor->visitBook($this);
    }
}

final class Movie implements Item
{
    public function __construct(public readonly string $title)
    {
    }

    public function accept(Visitor $visitor): string
    {
        return $visitor->visitMovie($this);
    }
}

final class PricingVisitor implements Visitor
{
    public function visitBook(Book $book): string
    {
        return 'book:' . $book->title;
    }

    public function visitMovie(Movie $movie): string
    {
        return 'movie:' . $movie->title;
    }
}
