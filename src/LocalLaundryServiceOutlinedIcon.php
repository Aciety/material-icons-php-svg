<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['cleaning', 'clothing', 'dry', 'dryer', 'hotel', 'laundry', 'local', 'service', 'washer'],
)]
final class LocalLaundryServiceOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M18 2.01L6 2c-1.11 0-2 .89-2 2v16c0 1.11.89 2 2 2h12c1.11 0 2-.89 2-2V4c0-1.11-.89-1.99-2-1.99zM18 20H6L5.99 4H18v16z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '8', cy: '6', r: '1');
        $doc->addChild($l0I2);
        $l0I3 = new SVGCircle(cx: '11', cy: '6', r: '1');
        $doc->addChild($l0I3);
        $l0I4 = new SVGPath(d: 'M12 19c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm2.36-7.36c1.3 1.3 1.3 3.42 0 4.72-1.3 1.3-3.42 1.3-4.72 0l4.72-4.72z');
        $doc->addChild($l0I4);
    }
}
