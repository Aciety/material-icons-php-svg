<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['connection', 'network', 'radius', 'spoke'],
)]
final class SpokeOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M16,7c0-2.21-1.79-4-4-4S8,4.79,8,7c0,2.21,1.79,4,4,4S16,9.21,16,7z M12,9c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2s2,0.9,2,2 C14,8.1,13.1,9,12,9z M7,13c-2.21,0-4,1.79-4,4c0,2.21,1.79,4,4,4s4-1.79,4-4C11,14.79,9.21,13,7,13z M7,19c-1.1,0-2-0.9-2-2 c0-1.1,0.9-2,2-2s2,0.9,2,2C9,18.1,8.1,19,7,19z M17,13c-2.21,0-4,1.79-4,4c0,2.21,1.79,4,4,4s4-1.79,4-4C21,14.79,19.21,13,17,13z M17,19c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2s2,0.9,2,2C19,18.1,18.1,19,17,19z');
        $doc->addChild($l0I1);
    }
}
