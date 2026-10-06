<?php

declare(strict_types=1);

namespace App\Observer;

interface Observer
{
    public function update(string $event): void;
}

final class Subject
{
    /** @var list<Observer> */
    private array $observers = [];

    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function notify(string $event): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($event);
        }
    }
}

final class EventLogger implements Observer
{
    public string $lastEvent = '';

    public function update(string $event): void
    {
        $this->lastEvent = $event;
    }
}
