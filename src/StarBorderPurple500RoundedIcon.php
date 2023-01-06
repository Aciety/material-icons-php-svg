<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['toggle'],
    tags: ['500', 'best', 'bookmark', 'border', 'favorite', 'highlight', 'outline', 'purple', 'ranking', 'rate', 'rating', 'save', 'star', 'toggle'],
)]
final class StarBorderPurple500RoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l2I0->setStyle('fill', 'none');
        $l1I0->addChild($l2I0);
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M12,8.89L12.94,12h2.82l-2.27,1.62l0.93,3.01L12,14.79l-2.42,1.84l0.93-3.01L8.24,12h2.82L12,8.89 M9.58,10H5.12 c-0.97,0-1.37,1.25-0.58,1.81l3.64,2.6l-1.43,4.61c-0.29,0.93,0.79,1.68,1.56,1.09L12,17.31l3.69,2.81 c0.77,0.59,1.85-0.16,1.56-1.09l-1.43-4.61l3.64-2.6c0.79-0.57,0.39-1.81-0.58-1.81h-4.46l-1.47-4.84c-0.29-0.95-1.63-0.95-1.91,0 L9.58,10z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
