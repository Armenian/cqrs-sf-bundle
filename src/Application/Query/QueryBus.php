<?php

declare(strict_types=1);

namespace DMP\CQRS\Application\Query;

interface QueryBus
{
    /**
     * @template QueryTemplate
     * @param Query<QueryTemplate> $query
     * @return QueryTemplate
     */
    public function handle(Query $query): mixed;
}
