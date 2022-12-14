<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['axis', 'dash', 'horizontal', 'line', 'stroke', 'vertical'],
)]
final class LineAxisRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M21.34,6.77L21.34,6.77c-0.4-0.4-1.07-0.39-1.45,0.04l-3.33,3.74l-5.65-5.24C10.12,4.58,8.9,4.6,8.14,5.36L2.7,10.81 c-0.39,0.39-0.39,1.02,0,1.41l0.09,0.09c0.39,0.39,1.02,0.39,1.41,0l5.44-5.45l5.59,5.19l-1.73,1.95l-2.58-2.58 c-0.78-0.78-2.05-0.78-2.83,0L2.7,16.8c-0.39,0.39-0.39,1.02,0,1.41L2.8,18.3c0.39,0.39,1.02,0.39,1.41,0l5.3-5.3l2.5,2.5 c0.81,0.81,2.14,0.77,2.91-0.09l1.78-2.01l3.19,2.96c0.39,0.36,1,0.35,1.38-0.03l0.01-0.01c0.4-0.4,0.39-1.05-0.03-1.43l-3.22-2.99 l3.35-3.77C21.73,7.74,21.71,7.14,21.34,6.77z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
