<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['as', 'envelop', 'letter', 'mail', 'mark', 'post', 'postal', 'read', 'receive', 'send', 'unread'],
)]
final class MarkAsUnreadRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M16.23,7h2.6c-0.06-0.47-0.36-0.94-0.79-1.17L11.4,2.45c-0.56-0.29-1.23-0.29-1.8-0.01L2.8,5.83C2.32,6.09,2,6.64,2,7.17 V15c0,1.1,0.9,2,2,2V7.4L10.5,4L16.23,7z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M20,8H7c-1.1,0-2,0.9-2,2v9c0,1.1,0.9,2,2,2h13c1.1,0,2-0.9,2-2v-9C22,8.9,21.1,8,20,8z M20,11.46 c0,0.33-0.19,0.64-0.48,0.79l-5.61,2.88c-0.25,0.13-0.56,0.13-0.81,0l-5.61-2.88C7.19,12.1,7,11.79,7,11.46v0 c0-0.67,0.7-1.1,1.3-0.79l5.2,2.67l5.2-2.67C19.3,10.36,20,10.79,20,11.46L20,11.46z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
