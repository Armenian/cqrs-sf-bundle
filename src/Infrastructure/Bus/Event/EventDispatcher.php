<?php

declare(strict_types=1);

namespace DMP\CQRS\Infrastructure\Bus\Event;

use DMP\CQRS\Application\Event\EventBus;
use DMP\CQRS\Application\Event\Event;
use DMP\CQRS\Infrastructure\Bus\MessageDispatcher;

final class EventDispatcher extends MessageDispatcher implements EventBus
{
    public function handle(Event $event, array $stamps = []): void
    {
        $this->messageBus->dispatch($event, $stamps);
    }
}
