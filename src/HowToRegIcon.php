<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['content'],
    tags: ['approve', 'ballot', 'check', 'complete', 'done', 'election', 'how', 'mark', 'ok', 'poll', 'register', 'registration', 'select', 'tick', 'to reg', 'validate', 'verified', 'vote', 'yes'],
)]
final class HowToRegIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $l0I0->setStyle('fill-rule', 'evenodd');
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M9 17l3-2.94c-.39-.04-.68-.06-1-.06-2.67 0-8 1.34-8 4v2h9l-3-3zm2-5c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4');
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M15.47 20.5L12 17l1.4-1.41 2.07 2.08 5.13-5.17 1.4 1.41z');
        $l0I1->addChild($l1I1);
        $l0I1->setStyle('fill-rule', 'evenodd');
        $doc->addChild($l0I1);
    }
}
