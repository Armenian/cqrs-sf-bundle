<?php

declare(strict_types=1);

namespace DMP\CQRS\Infrastructure\Bus\Query;

use DMP\CQRS\Application\Query\QueryBusInterface;
use DMP\CQRS\Application\Query\QueryInterface;
use DMP\CQRS\Infrastructure\Bus\AbstractBus;
use Symfony\Component\Messenger\Stamp\HandledStamp;

final class QueryBus extends AbstractBus implements QueryBusInterface
{

    public function handle(QueryInterface $query): mixed
    {
        $envelope = $this->messageBus->dispatch($query);

        /** @var HandledStamp|null $stamp */
        $stamp = $envelope->last(HandledStamp::class);
        if (null === $stamp) {
            return null;
        }

        return $stamp->getResult();
    }
}
