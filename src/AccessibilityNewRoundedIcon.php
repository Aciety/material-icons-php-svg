<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['accessibility', 'accessible', 'body', 'handicap', 'help', 'human', 'new', 'people', 'person'],
)]
final class AccessibilityNewRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20.75 6.99c-.14-.55-.69-.87-1.24-.75-2.38.53-5.03.76-7.51.76s-5.13-.23-7.51-.76c-.55-.12-1.1.2-1.24.75-.14.56.2 1.13.75 1.26 1.61.36 3.35.61 5 .75v12c0 .55.45 1 1 1s1-.45 1-1v-5h2v5c0 .55.45 1 1 1s1-.45 1-1V9c1.65-.14 3.39-.39 4.99-.75.56-.13.9-.7.76-1.26zM12 6c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z');
        $doc->addChild($l0I1);
    }
}
