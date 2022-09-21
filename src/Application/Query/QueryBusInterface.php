<?php

declare(strict_types=1);

namespace DMP\CQRS\Application\Query;

interface QueryBusInterface
{
    public function handle(QueryInterface $query): mixed;
}
