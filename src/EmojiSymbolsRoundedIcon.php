<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['ampersand', 'character', 'emoji', 'hieroglyph', 'music', 'note', 'percent', 'sign', 'symbols'],
)]
final class EmojiSymbolsRoundedIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M10,5H4C3.45,5,3,5.45,3,6c0,0.55,0.45,1,1,1h2v3c0,0.55,0.45,1,1,1s1-0.45,1-1V7h2c0.55,0,1-0.45,1-1 C11,5.45,10.55,5,10,5z');
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M10,2H4C3.45,2,3,2.45,3,3s0.45,1,1,1h6c0.55,0,1-0.45,1-1S10.55,2,10,2z');
        $l1I1->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M20.89,13.11c-0.39-0.39-1.02-0.39-1.41,0l-6.36,6.36c-0.39,0.39-0.39,1.02,0,1.41c0.39,0.39,1.02,0.39,1.41,0l6.36-6.36 C21.28,14.13,21.28,13.5,20.89,13.11z');
        $l1I1->addChild($l2I2);
        $l2I3 = new SVGCircle(cx: '14.5', cy: '14.5', r: '1.5');
        $l1I1->addChild($l2I3);
        $l2I4 = new SVGCircle(cx: '19.5', cy: '19.5', r: '1.5');
        $l1I1->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M15.5,11c1.38,0,2.5-1.12,2.5-2.5V4h2c0.55,0,1-0.45,1-1c0-0.55-0.45-1-1-1h-2c-0.55,0-1,0.45-1,1v3.51 C16.58,6.19,16.07,6,15.5,6C14.12,6,13,7.12,13,8.5C13,9.88,14.12,11,15.5,11z');
        $l1I1->addChild($l2I5);
        $l2I6 = new SVGPath(d: 'M10.45,18.09c0.39-0.39,0.39-1.02,0-1.41c-0.39-0.39-1.02-0.39-1.41,0l-0.71,0.71l-0.71-0.71l0.35-0.35 c0.98-0.98,0.98-2.56,0-3.54h0c-0.49-0.49-1.13-0.73-1.77-0.73c-0.64,0-1.28,0.24-1.77,0.73c-0.98,0.98-0.98,2.56,0,3.54 l0.35,0.35l-1.06,1.06c-0.98,0.98-0.98,2.56,0,3.54C4.22,21.76,4.86,22,5.5,22c0.64,0,1.28-0.24,1.77-0.73l1.06-1.06l0.71,0.71 c0.39,0.39,1.02,0.39,1.41,0c0.39-0.39,0.39-1.02,0-1.41l-0.71-0.71v0L10.45,18.09z M5.85,14.2c0.12-0.12,0.26-0.15,0.35-0.15 s0.23,0.03,0.35,0.15c0.19,0.2,0.19,0.51,0,0.71l-0.35,0.35L5.85,14.9c-0.12-0.12-0.15-0.26-0.15-0.35S5.73,14.32,5.85,14.2z M5.85,19.85C5.73,19.97,5.59,20,5.5,20s-0.23-0.03-0.35-0.15C5.03,19.73,5,19.59,5,19.5s0.03-0.23,0.15-0.35l1.06-1.06l0.71,0.71 L5.85,19.85z');
        $l1I1->addChild($l2I6);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
