<?php

declare(strict_types=1);

namespace DMP\CQRS\Infrastructure\Bus\Command;

use DMP\CQRS\Application\Command\CommandInterface;
use DMP\CQRS\Application\Command\CommandBusInterface;
use DMP\CQRS\Infrastructure\Bus\AbstractBus;

class CommandBus extends AbstractBus implements CommandBusInterface
{
    public function handle(CommandInterface $command, array $stamps = []): void
    {
        $this->messageBus->dispatch($command, $stamps);
    }
}
