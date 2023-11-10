<?php

declare(strict_types=1);

namespace DMP\CQRS\Infrastructure\Bus\Query;

use DMP\CQRS\Application\Query\QueryBus;
use DMP\CQRS\Application\Query\Query;
use DMP\CQRS\Infrastructure\Bus\MessageDispatcher;
use Symfony\Component\Messenger\Stamp\HandledStamp;

final class QueryDispatcher extends MessageDispatcher implements QueryBus
{

    public function handle(Query $query): mixed
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
