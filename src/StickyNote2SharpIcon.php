<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['2', 'bookmark', 'mark', 'message', 'note', 'paper', 'sticky', 'text', 'writing'],
)]
final class StickyNote2SharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M2.99,3L3,21h12l6-6V3H2.99z M7,8h10v2H7V8z M12,14H7v-2h5V14z M14,19.5V14h5.5L14,19.5z');
        $doc->addChild($l0I1);
    }
}
