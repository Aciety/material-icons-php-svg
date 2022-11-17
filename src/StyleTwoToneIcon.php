<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['booklet', 'cards', 'filters', 'options', 'style', 'tags'],
)]
final class StyleTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M15.22 4.75L7.87 7.79l4.96 11.96 7.35-3.05-4.96-11.95zM11 10c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M3.87 11.18l-2.43 5.86c-.41 1.02.08 2.19 1.09 2.61l1.34.56v-9.03zm18.16 4.77L17.07 3.98c-.31-.75-1.04-1.21-1.81-1.23-.26 0-.53.04-.79.15L7.1 5.95c-.75.31-1.21 1.03-1.23 1.8-.01.27.04.54.15.8l4.96 11.97c.31.76 1.05 1.22 1.83 1.23.26 0 .52-.05.77-.15l7.36-3.05c1.02-.42 1.51-1.59 1.09-2.6zm-9.2 3.8L7.87 7.79l7.35-3.04h.01l4.95 11.95-7.35 3.05z');
        $doc->addChild($l0I2);
        $l0I3 = new SVGCircle(cx: '11', cy: '9', r: '1');
        $doc->addChild($l0I3);
        $l0I4 = new SVGPath(d: 'M9.33 21.75l-3.45-8.34v6.34c0 1.1.9 2 2 2h1.45z');
        $doc->addChild($l0I4);
    }
}
