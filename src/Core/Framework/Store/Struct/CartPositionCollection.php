<?php declare(strict_types=1);

namespace Shopware\Core\Framework\Store\Struct;

use Shopware\Core\Framework\Struct\Collection;

/**
 * @package merchant-services
 *
 * @codeCoverageIgnore
 * @extends Collection<CartPositionStruct>
 */
class CartPositionCollection extends Collection
{
    public function __construct(iterable $elements = [])
    {
        foreach ($elements as $element) {
            if (\is_array($element)) {
                $element = $this->getElementFromArray($element);
            }

            $this->add($element);
        }
    }

    protected function getExpectedClass(): ?string
    {
        return CartPositionStruct::class;
    }

    protected function getElementFromArray(array $element): CartPositionStruct
    {
        return CartPositionStruct::fromArray($element);
    }
}
