<?php

declare(strict_types=1);

namespace DMP\CQRS;

use Symfony\Component\HttpKernel\Bundle\Bundle;

final class CQRSBundle extends Bundle
{
    public function getContainerExtensionClass(): string
    {
        return CQRSExtension::class;
    }
}
