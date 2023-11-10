<?php

declare(strict_types=1);

namespace DMP\CQRS;

use DMP\CQRS\Application\Command\CommandHandler;
use DMP\CQRS\Application\Event\EventHandler;
use DMP\CQRS\Application\Query\QueryHandler;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader as ConfigYamlFileLoader;
use Exception;

final class CQRSExtension extends Extension
{

    /**
     * @throws Exception
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new ConfigYamlFileLoader($container, new FileLocator(__DIR__ . '/../config'));
        $loader->load('services.yaml');

        $container->registerForAutoconfiguration(CommandHandler::class)
            ->addTag('messenger.message_handler', ['bus' => 'messenger.bus.command']);
        $container->registerForAutoconfiguration(QueryHandler::class)
            ->addTag('messenger.message_handler', ['bus' => 'messenger.bus.query']);
        $container->registerForAutoconfiguration(EventHandler::class)
            ->addTag('messenger.message_handler', ['bus' => 'messenger.bus.event']);
    }
}
