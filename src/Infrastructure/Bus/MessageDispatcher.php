<?php

declare(strict_types=1);


namespace DMP\CQRS\Infrastructure\Bus;

use Symfony\Component\Messenger\MessageBusInterface;

abstract class MessageDispatcher
{
    public function __construct(protected readonly MessageBusInterface $messageBus){}
}
