<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['content'],
    tags: ['approve', 'ballot', 'check', 'complete', 'done', 'election', 'how', 'mark', 'ok', 'poll', 'register', 'registration', 'select', 'tick', 'to reg', 'validate', 'verified', 'vote', 'yes'],
)]
final class HowToRegTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGCircle(cx: '11', cy: '8', r: '2');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M5 18h4.99L9 17l.93-.94C7.55 16.33 5.2 17.37 5 18z');
        $l0I2->setStyle('opacity', '.3');
        $doc->addChild($l0I2);
        $l0I3 = new SVGPath(d: 'M11 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm-1 12H5c.2-.63 2.55-1.67 4.93-1.94h.03l.46-.45L12 14.06c-.39-.04-.68-.06-1-.06-2.67 0-8 1.34-8 4v2h9l-2-2zm10.6-5.5l-5.13 5.17-2.07-2.08L12 17l3.47 3.5L22 13.91z');
        $doc->addChild($l0I3);
    }
}
