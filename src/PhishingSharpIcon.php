<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['fish', 'fishing', 'fraud', 'hook', 'phishing', 'scam'],
)]
final class PhishingSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M19,9c0-1.3-0.84-2.4-2-2.82V2h-2v4.18C13.84,6.6,13,7.7,13,9s0.84,2.4,2,2.82V15c0,2.21-1.79,4-4,4s-4-1.79-4-4v-1h3L5,9 v6c0,3.31,2.69,6,6,6s6-2.69,6-6v-3.18C18.16,11.4,19,10.3,19,9z M16,10c-0.55,0-1-0.45-1-1s0.45-1,1-1s1,0.45,1,1S16.55,10,16,10z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
