<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['arrow', 'arrows', 'chevron', 'circle', 'collapse', 'direction', 'down', 'expand', 'expandable', 'list', 'more'],
)]
final class ExpandCircleDownRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12,2C6.48,2,2,6.48,2,12c0,5.52,4.48,10,10,10s10-4.48,10-10C22,6.48,17.52,2,12,2z M15.79,11.71l-3.08,3.08 c-0.39,0.39-1.02,0.39-1.42,0l-3.08-3.08c-0.39-0.39-0.39-1.03,0-1.42c0.39-0.39,1.02-0.39,1.41,0L12,12.67l2.38-2.38 c0.39-0.39,1.02-0.39,1.41,0C16.18,10.68,16.18,11.32,15.79,11.71z');
        $doc->addChild($l0I1);
    }
}
