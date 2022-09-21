<?php

declare(strict_types=1);

namespace DMP\CQRS\Application\Event;

interface EventBusInterface
{
    public function handle(EventInterface $event, array $stamps = []): void;
}
