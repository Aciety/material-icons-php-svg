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
    tags: ['3', '3p', 'account', 'avatar', 'bubble', 'chat', 'comment', 'communicate', 'face', 'human', 'message', 'party', 'people', 'person', 'profile', 'speech', 'user'],
)]
final class ThreePSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M2,2v20l4-4h16V2H2z M12,6c1.1,0,2,0.9,2,2s-0.9,2-2,2s-2-0.9-2-2S10.9,6,12,6z M16,14H8v-0.57c0-0.81,0.48-1.53,1.22-1.85 C10.07,11.21,11.01,11,12,11c0.99,0,1.93,0.21,2.78,0.58C15.52,11.9,16,12.62,16,13.43V14z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
