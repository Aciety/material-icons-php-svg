<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['alphabet', 'character', 'develop', 'developer', 'engineer', 'engineering', 'font', 'hls', 'letter', 'platform', 'symbol', 'text', 'type'],
)]
final class HlsRoundedIcon extends SVG
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
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M10.75,9C10.34,9,10,9.34,10,9.75V14c0,0.55,0.45,1,1,1h2.25c0.41,0,0.75-0.34,0.75-0.75s-0.34-0.75-0.75-0.75H11.5V9.75 C11.5,9.34,11.16,9,10.75,9z M19.04,10.5c0.1,0.29,0.38,0.5,0.71,0.5c0.41,0,0.75-0.34,0.75-0.75V10c0-0.55-0.45-1-1-1h-3 c-0.55,0-1,0.45-1,1v1.5c0,0.55,0.45,1,1,1H19v1h-2.04v0c-0.1-0.29-0.38-0.5-0.71-0.5c-0.41,0-0.75,0.34-0.75,0.75V14 c0,0.55,0.45,1,1,1h3c0.55,0,1-0.45,1-1v-1.5c0-0.55-0.45-1-1-1H17v-1L19.04,10.5z M8,9.75C8,9.34,7.66,9,7.25,9S6.5,9.34,6.5,9.75 V11h-2V9.75C4.5,9.34,4.16,9,3.75,9S3,9.34,3,9.75v4.5C3,14.66,3.34,15,3.75,15s0.75-0.34,0.75-0.75V12.5h2v1.75 C6.5,14.66,6.84,15,7.25,15S8,14.66,8,14.25V9.75z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
