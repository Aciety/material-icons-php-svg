<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['jew', 'jewish', 'religion', 'shul', 'spiritual', 'temple', 'worship'],
)]
final class SynagogueRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M6,8.94V21h4l0-4.89c0-1,0.68-1.92,1.66-2.08C12.92,13.82,14,14.79,14,16v5h4V8.94c0-0.59-0.26-1.16-0.72-1.54l-4-3.33 c-0.74-0.62-1.82-0.62-2.56,0l-4,3.33C6.26,7.78,6,8.34,6,8.94z M13.5,10c0,0.83-0.67,1.5-1.5,1.5s-1.5-0.67-1.5-1.5 s0.67-1.5,1.5-1.5S13.5,9.17,13.5,10z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M3,5C1.9,5,1,5.9,1,7v1h4V7C5,5.9,4.1,5,3,5z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M3,21h2V9H1v10C1,20.1,1.9,21,3,21z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M21,5c-1.1,0-2,0.9-2,2v1h4V7C23,5.9,22.1,5,21,5z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M19,21h2c1.1,0,2-0.9,2-2V9h-4V21z');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
