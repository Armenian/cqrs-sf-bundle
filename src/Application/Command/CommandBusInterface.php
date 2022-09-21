<?php

declare(strict_types=1);

namespace DMP\CQRS\Application\Command;

interface CommandBusInterface
{
    public function handle(CommandInterface $command, array $stamps = []): void;
}
