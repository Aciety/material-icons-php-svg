<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['bulb', 'creative', 'emoji', 'idea', 'light', 'objects', 'solution', 'thinking'],
)]
final class EmojiObjectsRoundedIcon extends SvgIcon
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
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M12,3c-0.46,0-0.93,0.04-1.4,0.14C7.84,3.67,5.64,5.9,5.12,8.66c-0.48,2.61,0.48,5.01,2.22,6.56 C7.77,15.6,8,16.13,8,16.69V19c0,1.1,0.9,2,2,2h0.28c0.35,0.6,0.98,1,1.72,1s1.38-0.4,1.72-1H14c1.1,0,2-0.9,2-2v-2.31 c0-0.55,0.22-1.09,0.64-1.46C18.09,13.95,19,12.08,19,10C19,6.13,15.87,3,12,3z M12.5,14h-1v-2.59L9.67,9.59l0.71-0.71L12,10.5 l1.62-1.62l0.71,0.71l-1.83,1.83V14z M13.5,19c-0.01,0-0.02-0.01-0.03-0.01V19h-2.94v-0.01c-0.01,0-0.02,0.01-0.03,0.01 c-0.28,0-0.5-0.22-0.5-0.5c0-0.28,0.22-0.5,0.5-0.5c0.01,0,0.02,0.01,0.03,0.01V18h2.94v0.01c0.01,0,0.02-0.01,0.03-0.01 c0.28,0,0.5,0.22,0.5,0.5C14,18.78,13.78,19,13.5,19z M13.5,17h-3c-0.28,0-0.5-0.22-0.5-0.5c0-0.28,0.22-0.5,0.5-0.5h3 c0.28,0,0.5,0.22,0.5,0.5C14,16.78,13.78,17,13.5,17z');
        $l1I1->addChild($l2I0);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
