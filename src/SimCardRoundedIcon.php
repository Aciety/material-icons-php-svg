<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['camera', 'card', 'chip', 'device', 'memory', 'phone', 'sim', 'storage'],
)]
final class SimCardRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M19.99 4c0-1.1-.89-2-1.99-2h-7.17c-.53 0-1.04.21-1.42.59L4.59 7.41C4.21 7.79 4 8.3 4 8.83V20c0 1.1.9 2 2 2h12.01c1.1 0 1.99-.9 1.99-2l-.01-16zM8 19c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm8 0c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-8-4c-.55 0-1-.45-1-1v-2c0-.55.45-1 1-1s1 .45 1 1v2c0 .55-.45 1-1 1zm4 4c-.55 0-1-.45-1-1v-2c0-.55.45-1 1-1s1 .45 1 1v2c0 .55-.45 1-1 1zm0-6c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm4 2c-.55 0-1-.45-1-1v-2c0-.55.45-1 1-1s1 .45 1 1v2c0 .55-.45 1-1 1z');
        $doc->addChild($l0I0);
    }
}
