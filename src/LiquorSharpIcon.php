<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['alcohol', 'bar', 'bottle', 'club', 'cocktail', 'drink', 'food', 'liquor', 'party', 'store', 'wine'],
)]
final class LiquorSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGGroup();
        $l4I0 = new SVGPath(d: 'M3,14c0,1.3,0.84,2.4,2,2.82V20H3v2h6v-2H7v-3.18C8.16,16.4,9,15.3,9,14V6H3V14z M5,8h2v3H5V8z');
        $l3I0->addChild($l4I0);
        $l2I0->addChild($l3I0);
        $l3I1 = new SVGGroup();
        $l4I0 = new SVGPath(d: 'M22,9l-3-1.01V2h-5v6l-3,1.01V22h11V9z M16,4h1v1h-1V4z M13,10.44l3-0.98V7h1v2.46l3,0.98V12h-7V10.44z M20,20h-7v-2h7 V20z');
        $l3I1->addChild($l4I0);
        $l2I0->addChild($l3I1);
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
