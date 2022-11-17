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
    tags: ['cleaning', 'clothing', 'dry', 'dryer', 'hotel', 'laundry', 'local', 'service', 'washer'],
)]
final class LocalLaundryServiceRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M9.64,16.36c1.3,1.3,3.42,1.3,4.72,0c1.3-1.3,1.3-3.42,0-4.72L9.64,16.36z M18,2.01L6,2C4.89,2,4,2.89,4,4v16 c0,1.11,0.89,2,2,2h12c1.11,0,2-0.89,2-2V4C20,2.89,19.11,2.01,18,2.01z M11,5c0.55,0,1,0.45,1,1s-0.45,1-1,1s-1-0.45-1-1 S10.45,5,11,5z M8,5c0.55,0,1,0.45,1,1S8.55,7,8,7S7,6.55,7,6S7.45,5,8,5z M12,19c-2.76,0-5-2.24-5-5c0-2.76,2.24-5,5-5s5,2.24,5,5 C17,16.76,14.76,19,12,19z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
