<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['image'],
    tags: ['auto', 'book', 'flipping', 'pages', 'stories'],
)]
final class AutoStoriesRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: '0', y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M18.15,1.35l-4,4C14.05,5.45,14,5.57,14,5.71v8.17c0,0.43,0.51,0.66,0.83,0.37l4-3.6c0.11-0.09,0.17-0.23,0.17-0.37V1.71 C19,1.26,18.46,1.04,18.15,1.35z M22.47,5.2C22,4.96,21.51,4.76,21,4.59v12.03C19.86,16.21,18.69,16,17.5,16 c-1.9,0-3.78,0.54-5.5,1.58V5.48C10.38,4.55,8.51,4,6.5,4C4.71,4,3.02,4.44,1.53,5.2C1.2,5.36,1,5.71,1,6.08v12.08 c0,0.76,0.81,1.23,1.48,0.87C3.69,18.4,5.05,18,6.5,18c2.07,0,3.98,0.82,5.5,2c1.52-1.18,3.43-2,5.5-2c1.45,0,2.81,0.4,4.02,1.04 C22.19,19.4,23,18.93,23,18.17V6.08C23,5.71,22.8,5.36,22.47,5.2z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
