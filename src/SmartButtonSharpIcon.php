<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['action', 'auto', 'button', 'components', 'composer', 'function', 'interface', 'site', 'smart', 'special', 'stars', 'ui', 'ux', 'web', 'website'],
)]
final class SmartButtonSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M22,17h-3l0-2h1V9H4v6h6v2H2V7h20V17z M14.5,19l1.09-2.41L18,15.5l-2.41-1.09L14.5,12l-1.09,2.41L11,15.5l2.41,1.09 L14.5,19z M17,14l0.62-1.38L19,12l-1.38-0.62L17,10l-0.62,1.38L15,12l1.38,0.62L17,14z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
