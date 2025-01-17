<?php declare(strict_types=1);

namespace Shopware\Core\Framework\Routing\Annotation;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ConfigurationAnnotation;

/**
 * @Annotation
 *
 * @package core
 */
class Since extends ConfigurationAnnotation
{
    /**
     * @var string
     */
    private $value;

    /**
     * @return string
     */
    public function getAliasName()
    {
        return 'since';
    }

    /**
     * @return bool
     */
    public function allowArray()
    {
        return false;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $entity): void
    {
        $this->value = $entity;
    }
}
