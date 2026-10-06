<?php

declare(strict_types=1);

namespace App\AbstractFactory;

interface Button
{
    public function render(): string;
}

interface Checkbox
{
    public function render(): string;
}

interface GUIFactory
{
    public function createButton(): Button;

    public function createCheckbox(): Checkbox;
}

final class WindowsButton implements Button
{
    public function render(): string
    {
        return 'Windows button';
    }
}

final class WindowsCheckbox implements Checkbox
{
    public function render(): string
    {
        return 'Windows checkbox';
    }
}

final class WindowsFactory implements GUIFactory
{
    public function createButton(): Button
    {
        return new WindowsButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new WindowsCheckbox();
    }
}

final class Application
{
    public function __construct(private readonly GUIFactory $factory)
    {
    }

    public function render(): string
    {
        return $this->factory->createButton()->render() . ' + ' . $this->factory->createCheckbox()->render();
    }
}
