<?php declare(strict_types=1);

namespace Shopware\Core\Framework;

/**
 * @package core
 */
interface ShopwareException extends \Throwable
{
    public function getErrorCode(): string;

    /**
     * @return array<string|int, mixed|null>
     */
    public function getParameters(): array;
}
