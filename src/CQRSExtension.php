<?php

declare(strict_types=1);

namespace DMP\CQRS;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader as ConfigYamlFileLoader;

class CQRSExtension extends Extension
{

    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new ConfigYamlFileLoader($container, new FileLocator(__DIR__ . '/../config'));
        $loader->load('services.yaml');
    }
}
