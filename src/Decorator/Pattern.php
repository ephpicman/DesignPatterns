<?php

declare(strict_types=1);

namespace App\Decorator;

interface Notifier
{
    public function send(string $message): string;
}

final class EmailNotifier implements Notifier
{
    public function send(string $message): string
    {
        return 'email:' . $message;
    }
}

abstract class NotifierDecorator implements Notifier
{
    public function __construct(protected readonly Notifier $notifier)
    {
    }
}

final class SmsDecorator extends NotifierDecorator
{
    public function send(string $message): string
    {
        return $this->notifier->send($message) . '|sms:' . $message;
    }
}
