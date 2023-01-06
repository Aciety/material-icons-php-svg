<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['av'],
    tags: ['audio', 'doc', 'document', 'key', 'music', 'note', 'sound', 'track'],
)]
final class AudioFileRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M19.41,7.41l-4.83-4.83C14.21,2.21,13.7,2,13.17,2H6C4.9,2,4.01,2.9,4.01,4L4,20c0,1.1,0.89,2,1.99,2H18c1.1,0,2-0.9,2-2 V8.83C20,8.3,19.79,7.79,19.41,7.41z M15,13h-2v3.61c0,1.28-1,2.41-2.28,2.39c-1.44-0.02-2.56-1.39-2.13-2.91 c0.21-0.72,0.8-1.31,1.53-1.51c0.7-0.19,1.36-0.05,1.88,0.29V12c0-0.55,0.45-1,1-1h2c0.55,0,1,0.45,1,1C16,12.55,15.55,13,15,13z M14,9c-0.55,0-1-0.45-1-1V3.5L18.5,9H14z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
