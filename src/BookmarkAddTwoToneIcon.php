<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['+', 'add', 'bookmark', 'favorite', 'plus', 'remember', 'ribbon', 'save', 'symbol'],
)]
final class BookmarkAddTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M17,17.97l0-7.07c-2.28-0.46-4-2.48-4-4.9c0-0.34,0.03-0.68,0.1-1L7,5v12.97l5-2.14L17,17.97z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M21,7h-2v2h-2V7h-2V5h2V3h2v2h2V7z M17,17.97l-5-2.14l-5,2.14V5l6.1,0c0.15-0.74,0.46-1.42,0.9-2L7,3C5.9,3,5,3.9,5,5v16 l7-3l7,3l0-10.1c-0.32,0.07-0.66,0.1-1,0.1c-0.34,0-0.68-0.03-1-0.1L17,17.97z');
        $doc->addChild($l0I2);
    }
}
