<?php

declare(strict_types=1);

namespace DMP\CQRS\Infrastructure\Bus\Command;

use DMP\CQRS\Application\Command\Command;
use DMP\CQRS\Application\Command\CommandBus;
use DMP\CQRS\Infrastructure\Bus\MessageDispatcher;

final class CommandDispatcher extends MessageDispatcher implements CommandBus
{
    public function handle(Command $command, array $stamps = []): void
    {
        $this->messageBus->dispatch($command, $stamps);
    }
}
