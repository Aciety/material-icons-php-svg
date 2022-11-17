<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['bad', 'decline', 'disapprove', 'dislike', 'down', 'feedback', 'hate', 'negative', 'no', 'reject', 'social', 'thumb', 'veto', 'vote'],
)]
final class ThumbDownAltSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $l0I0->setStyle('opacity', '.87');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M1 11.6V16h8.31l-1.12 5.38L9.83 23 17 15.82V3H4.69zM19 3h4v12h-4z');
        $doc->addChild($l0I1);
    }
}
