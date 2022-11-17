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
    tags: ['arrow', 'arrows', 'chevron', 'collapse', 'direction', 'double', 'down', 'expand', 'expandable', 'list', 'more', 'navigation', 'unfold'],
)]
final class UnfoldMoreDoubleIcon extends SVG
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
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M12,7.83L15.17,11l1.41-1.41L12,5L7.41,9.59L8.83,11L12,7.83z M12,2.83L15.17,6l1.41-1.41L12,0L7.41,4.59L8.83,6L12,2.83 z M12,21.17L8.83,18l-1.41,1.41L12,24l4.59-4.59L15.17,18L12,21.17z M12,16.17L8.83,13l-1.41,1.41L12,19l4.59-4.59L15.17,13 L12,16.17z');
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
