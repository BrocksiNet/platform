<?php declare(strict_types=1);

namespace Shopware\Core\Checkout\DependencyInjection\CompilerPass;

use Shopware\Core\Checkout\Cart\CartPersister;
use Shopware\Core\Checkout\Cart\RedisCartPersister;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * @package core
 */
class CartRedisCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        if (!$container->getParameter('shopware.cart.redis_url')) {
            $container->removeDefinition('shopware.cart.redis');
            $container->removeDefinition(RedisCartPersister::class);

            return;
        }

        $container->removeDefinition(CartPersister::class);
        $container->setAlias(CartPersister::class, RedisCartPersister::class);
    }
}
