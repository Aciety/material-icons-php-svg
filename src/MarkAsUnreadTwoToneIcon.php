<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['as', 'envelop', 'letter', 'mail', 'mark', 'post', 'postal', 'read', 'receive', 'send', 'unread'],
)]
final class MarkAsUnreadTwoToneIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[13.5, 13.33], [20, 10], [7, 10]]);
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[7, 12], [7, 19], [20, 19], [20, 12], [13.5, 15.33]]);
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M16.23,7h2.6c-0.06-0.47-0.36-0.94-0.79-1.17L10.5,2L2.8,5.83C2.32,6.09,2,6.64,2,7.17V15c0,1.1,0.9,2,2,2V7.4L10.5,4 L16.23,7z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M20,8H7c-1.1,0-2,0.9-2,2v9c0,1.1,0.9,2,2,2h13c1.1,0,2-0.9,2-2v-9C22,8.9,21.1,8,20,8z M20,19H7v-7l6.5,3.33L20,12V19z M13.5,13.33L7,10h13L13.5,13.33z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
