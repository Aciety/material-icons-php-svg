<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['content'],
    tags: ['around', 'arrows', 'change', 'circle', 'direction', 'navigation', 'rotate'],
)]
final class ChangeCircleTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12,4c4.41,0,8,3.59,8,8s-3.59,8-8,8s-8-3.59-8-8S7.59,4,12,4 M12.06,13.34v2.14 c-0.92,0.02-1.84-0.31-2.54-1.01c-1.12-1.12-1.3-2.8-0.59-4.13l-1.1-1.1c-1.28,1.94-1.07,4.59,0.64,6.29C9.44,16.51,10.72,17,12,17 c0.02,0,0.04,0,0.06,0V19l2.83-2.83L12.06,13.34z M15.54,8.46c-0.99-0.99-2.3-1.46-3.6-1.45V5L9.11,7.83l2.83,2.83V8.51 c0.02,0,0.04,0,0.06,0c0.9,0,1.79,0.34,2.48,1.02c1.12,1.12,1.3,2.8,0.59,4.13l1.1,1.1C17.45,12.82,17.24,10.17,15.54,8.46z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M12,4c4.41,0,8,3.59,8,8s-3.59,8-8,8s-8-3.59-8-8S7.59,4,12,4 M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10 S17.52,2,12,2L12,2z M12.06,13.34v2.14c-0.92,0.02-1.84-0.31-2.54-1.01c-1.12-1.12-1.3-2.8-0.59-4.13l-1.1-1.1 c-1.28,1.94-1.07,4.59,0.64,6.29C9.44,16.51,10.72,17,12,17c0.02,0,0.04,0,0.06,0V19l2.83-2.83L12.06,13.34z M15.54,8.46 c-0.99-0.99-2.3-1.46-3.6-1.45V5L9.11,7.83l2.83,2.83V8.51c0.02,0,0.04,0,0.06,0c0.9,0,1.79,0.34,2.48,1.02 c1.12,1.12,1.3,2.8,0.59,4.13l1.1,1.1C17.45,12.82,17.24,10.17,15.54,8.46z');
        $doc->addChild($l0I2);
    }
}
