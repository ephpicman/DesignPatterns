# Design Patterns in PHP

A practical, test-driven reference for the **23 Gang of Four (GoF) design patterns**, implemented in PHP 8.2+ and backed by PHPUnit tests.

The purpose of this repository is educational: each pattern has a small, readable implementation, focused unit tests, and dedicated documentation explaining **what problem the pattern solves, how it works, when to use it, and what trade-offs it introduces**.

## What is covered

### Creational

- [Abstract Factory](docs/AbstractFactory.md)
- [Builder](docs/Builder.md)
- [Factory Method](docs/FactoryMethod.md)
- [Prototype](docs/Prototype.md)
- [Singleton](docs/Singleton.md)

### Structural

- [Adapter](docs/Adapter.md)
- [Bridge](docs/Bridge.md)
- [Composite](docs/Composite.md)
- [Decorator](docs/Decorator.md)
- [Facade](docs/Facade.md)
- [Flyweight](docs/Flyweight.md)
- [Proxy](docs/Proxy.md)

### Behavioural

- [Chain of Responsibility](docs/ChainOfResponsibility.md)
- [Command](docs/Command.md)
- [Interpreter](docs/Interpreter.md)
- [Iterator](docs/Iterator.md)
- [Mediator](docs/Mediator.md)
- [Memento](docs/Memento.md)
- [Observer](docs/Observer.md)
- [State](docs/State.md)
- [Strategy](docs/Strategy.md)
- [Template Method](docs/TemplateMethod.md)
- [Visitor](docs/Visitor.md)

## Repository structure

Each pattern is deliberately isolated:

```text
src/
└── PatternName/
    └── Pattern.php

tests/
└── Unit/
    └── PatternName/
        └── PatternTest.php

docs/
└── PatternName.md
```

The source demonstrates the pattern. The PHPUnit test demonstrates its observable behaviour. The documentation explains the design behind it.

## How to use this repository

Clone the repository and install its development dependencies:

```bash
git clone https://github.com/ephpicman/DesignPatterns.git
cd DesignPatterns
composer install
```

Run the complete verification suite:

```bash
composer check-all
```

Or run individual checks:

```bash
composer test
composer analyze:phpstan
composer analyze:psalm
composer format:check
```

## How to study a pattern

Do not start by memorising class diagrams. For each pattern, use this order:

1. Read the **problem** it addresses.
2. Understand the **forces and constraints** that make the problem difficult.
3. Read the implementation in `src/`.
4. Read the unit test and identify the behaviour being protected.
5. Read the documentation's **when to use** and **trade-offs** sections.
6. Try to explain how you would solve the same problem without the pattern.
7. Only then compare that solution with the pattern.

The goal is not to use more patterns. The goal is to recognise recurring design problems and choose the simplest appropriate solution.

## Testing philosophy

Every pattern has a dedicated PHPUnit test. The tests are intentionally focused on externally observable behaviour rather than implementation details.

A passing test suite does not prove that a pattern is appropriate for a real system. It proves that the example implementation behaves as documented.

## PHP version and tooling

The project targets **PHP 8.2+** and uses a small, conventional quality toolchain:

- **PHPUnit** — unit tests.
- **PHPStan** — static analysis.
- **Psalm** — independent static analysis.
- **PHP CS Fixer** — formatting.

The repository deliberately avoids unrelated framework integrations and niche tooling. It is a focused design-pattern reference, not a general-purpose PHP starter kit.

## Important scope note

This repository covers the **23 classic Gang of Four patterns**. It does not claim that GoF is the complete universe of useful software patterns. Application architecture, enterprise integration, concurrency, domain-driven design, and language-specific idioms contain other patterns, but adding them would be a separate scope and should not be confused with the canonical GoF catalogue.

## Contributing

Contributions should improve the educational value or correctness of the reference. Prefer small, focused changes. New examples should be justified by a real learning gap rather than added merely to increase the number of files.

Before submitting a change:

```bash
composer check-all
```

See [CONTRIBUTING.md](CONTRIBUTING.md).

## License

MIT. See [LICENSE](LICENSE).
