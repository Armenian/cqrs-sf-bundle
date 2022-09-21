<?php

declare(strict_types=1);

namespace DMP\CQRS\Infrastructure\Bus\Event;

use DMP\CQRS\Application\Event\EventBusInterface;
use DMP\CQRS\Application\Event\EventInterface;
use DMP\CQRS\Infrastructure\Bus\AbstractBus;

class EventBus extends AbstractBus implements EventBusInterface
{
    public function handle(EventInterface $event, array $stamps = []): void
    {
        $this->messageBus->dispatch($event, $stamps);
    }
}
