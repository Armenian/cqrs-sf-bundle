<?php

declare(strict_types=1);

namespace DMP\CQRS\Application\Query;

interface QueryBusInterface
{
    /**
     * @template QueryTemplate
     * @param QueryInterface<QueryTemplate> $query
     * @return QueryTemplate
     */
    public function handle(QueryInterface $query): mixed;
}
