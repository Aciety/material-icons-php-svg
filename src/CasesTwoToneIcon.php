<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['bag', 'baggage', 'briefcase', 'business', 'case', 'cases', 'purse', 'suitcase'],
)]
final class CasesTwoToneIcon extends SVG
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
        $l2I0 = new SVGRect(x: '7', y: '7', width: '14', height: '9');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M3,9H1v11c0,1.11,0.89,2,2,2h17v-2H3V9z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M18,5V3c0-1.1-0.9-2-2-2h-4c-1.1,0-2,0.9-2,2v2H5v11c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5H18z M12,3h4v2h-4V3z M21,16H7 V7h14V16z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
