<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['call', 'cell', 'contact', 'device', 'enabled', 'hardware', 'mobile', 'phone', 'telephone'],
)]
final class PhoneEnabledRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M4.78,15.27l2.54-0.29c0.61-0.07,1.21,0.14,1.64,0.57l1.84,1.84c2.83-1.44,5.15-3.75,6.59-6.59l-1.85-1.85 c-0.43-0.43-0.64-1.03-0.57-1.64l0.29-2.52c0.12-1.01,0.97-1.77,1.99-1.77h1.73c1.13,0,2.07,0.94,2,2.07 c-0.53,8.54-7.36,15.36-15.89,15.89c-1.13,0.07-2.07-0.87-2.07-2v-1.73C3.01,16.24,3.77,15.39,4.78,15.27z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
