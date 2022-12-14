<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['checkout', 'cost', 'machine', 'merchant', 'money', 'of', 'pay', 'payment', 'point', 'pos', 'retail', 'sale', 'system', 'transaction'],
)]
final class PointOfSaleSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M19,2H5c0,0,0,0,0,0v6c0,0,0,0,0,0h14c0,0,0,0,0,0L19,2C19,2,19,2,19,2z M17,6H7V4h10V6z M22,22H2c0,0,0,0,0,0v-3h20L22,22 C22,22,22,22,22,22z M18,9H6c0,0,0,0,0,0l-4,9h20L18,9z M10,16H8v-1h2V16z M10,14H8v-1h2V14z M10,12H8v-1h2V12z M13,16h-2v-1h2V16z M13,14h-2v-1h2V14z M13,12h-2v-1h2V12z M16,16h-2v-1h2V16z M16,14h-2v-1h2V14z M16,12h-2v-1h2V12z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
