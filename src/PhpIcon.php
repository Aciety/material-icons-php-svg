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
    tags: ['alphabet', 'brackets', 'character', 'code', 'css', 'develop', 'developer', 'engineer', 'engineering', 'font', 'html', 'letter', 'php', 'platform', 'symbol', 'text', 'type'],
)]
final class PhpIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M13,9h1.5v6H13v-2.5h-2V15H9.5V9H11v2h2V9z M8,10.5v1C8,12.3,7.3,13,6.5,13h-2v2H3V9h3.5C7.3,9,8,9.7,8,10.5z M6.5,10.5h-2 v1h2V10.5z M21.5,10.5v1c0,0.8-0.7,1.5-1.5,1.5h-2v2h-1.5V9H20C20.8,9,21.5,9.7,21.5,10.5z M20,10.5h-2v1h2V10.5z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
