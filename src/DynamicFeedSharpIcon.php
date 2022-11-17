<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['content'],
    tags: ['layer', 'live', 'mail_outline', 'multiple', 'post', 'refresh', 'update'],
)]
final class DynamicFeedSharpIcon extends SVG
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
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGPolygon(points: [[8, 8], [6, 8], [6, 17], [17, 17], [17, 15], [8, 15]]);
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M22,3H10v10h12V3z M20,11h-8V7h8V11z');
        $l1I1->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[4, 12], [2, 12], [2, 21], [13, 21], [13, 19], [4, 19]]);
        $l1I1->addChild($l2I2);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
        $l0I2 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l1I0->setStyle('display', 'inline');
        $l0I2->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGPolygon(points: [[8, 8], [6, 8], [6, 17], [17, 17], [17, 15], [8, 15]]);
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M22,3H10v10h12V3z M20,11h-8V7h8V11z');
        $l1I1->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[4, 12], [2, 12], [2, 21], [13, 21], [13, 19], [4, 19]]);
        $l1I1->addChild($l2I2);
        $l1I1->setStyle('display', 'inline');
        $l0I2->addChild($l1I1);
        $l0I2->setStyle('display', 'none');
        $doc->addChild($l0I2);
    }
}
