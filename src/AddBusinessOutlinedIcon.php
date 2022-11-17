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
    categories: ['maps'],
    tags: ['+', 'add', 'bill', 'building', 'business', 'card', 'cash', 'coin', 'commerce', 'company', 'credit', 'currency', 'dollars', 'market', 'money', 'new', 'online', 'pay', 'payment', 'plus', 'shop', 'shopping', 'store', 'storefront', 'symbol'],
)]
final class AddBusinessOutlinedIcon extends SVG
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
        $l2I0 = new SVGRect(x: '2', y: '4', width: '15', height: '2');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M15,17h2v-3h1v-2l-1-5H2l-1,5v2h1v6h9v-6h4V17z M9,18H4v-4h5V18z M3.04,12l0.6-3h11.72l0.6,3H3.04z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[23, 18], [20, 18], [20, 15], [18, 15], [18, 18], [15, 18], [15, 20], [18, 20], [18, 23], [20, 23], [20, 20], [23, 20]]);
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
