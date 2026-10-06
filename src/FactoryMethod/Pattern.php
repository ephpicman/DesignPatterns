<?php

declare(strict_types=1);

namespace App\FactoryMethod;

interface Notification
{
    public function send(string $message): string;
}

final class EmailNotification implements Notification
{
    public function send(string $message): string
    {
        return 'Email: ' . $message;
    }
}

abstract class NotificationCreator
{
    abstract protected function createNotification(): Notification;

    public function notify(string $message): string
    {
        return $this->createNotification()->send($message);
    }
}

final class EmailNotificationCreator extends NotificationCreator
{
    protected function createNotification(): Notification
    {
        return new EmailNotification();
    }
}
