<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['av'],
    tags: ['collection', 'list', 'music', 'playlist', 'queue'],
)]
final class QueueMusicTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGCircle(cx: '16', cy: '17', r: '1');
        $l1I0->setStyle('enable-background', 'new');
        $l1I0->setStyle('opacity', '.3');
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M3,10h12v2H3V10z M3,14h8v2H3V14z M3,6h12v2H3V6z M17,14.18C16.69,14.07,16.35,14,16,14c-1.66,0-3,1.34-3,3s1.34,3,3,3 s3-1.34,3-3V8h3V6h-5V14.18z');
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
