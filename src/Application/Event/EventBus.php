<?php

declare(strict_types=1);

namespace DMP\CQRS\Application\Event;

interface EventBus
{
    public function handle(Event $event, array $stamps = []): void;
}
