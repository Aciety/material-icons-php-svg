<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons\Attribute;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
final class MaterialIcon
{
    /**
     * @param list<non-empty-string> $categories
     * @param list<non-empty-string> $tags
     */
    public function __construct(
        public readonly array $categories = [],
        public readonly array $tags = [],
    ) {
    }
}
