<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['av'],
    tags: ['audio', 'bubble', 'chat', 'comment', 'communicate', 'feedback', 'key', 'lyrics', 'message', 'music', 'note', 'song', 'sound', 'speech', 'track'],
)]
final class LyricsTwoToneIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M4,4v14l2-2h9v-4.03c-0.62-0.83-1-1.85-1-2.97c0-1.12,0.38-2.14,1-2.97V4H4z M10,14H6v-2h4V14z M13,11H6V9 h7V11z M13,8H6V6h7V8z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '6', y: '12', width: '4', height: '2');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '6', y: '6', width: '7', height: '2');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M15,11.97V16H6l-2,2V4h11v2.03c0.52-0.69,1.2-1.25,2-1.6V4c0-1.1-0.9-2-2-2H4C2.9,2,2.01,2.9,2.01,4L2,22l4-4h9 c1.1,0,2-0.9,2-2v-2.42C16.2,13.22,15.52,12.66,15,11.97z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '6', y: '9', width: '7', height: '2');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M20,6.18C19.69,6.07,19.35,6,19,6c-1.66,0-3,1.34-3,3c0,1.66,1.34,3,3,3s3-1.34,3-3V3h2V1h-4V6.18z');
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
