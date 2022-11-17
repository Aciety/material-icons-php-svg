<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['+', 'add', 'archive', 'bookmark', 'favorite', 'label', 'library', 'new', 'plus', 'read', 'reading', 'remember', 'ribbon', 'save', 'symbol', 'tag'],
)]
final class NewLabelRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20.18,13.16l-3.55,5C16.25,18.69,15.65,19,15,19h-3l0-2l0-1c0-1.66-1.34-3-3-3h0v0c0-1.66-1.34-3-3-3H3V7c0-1.1,0.9-2,2-2 h10c0.65,0,1.26,0.31,1.63,0.84l3.55,5C20.67,11.54,20.67,12.46,20.18,13.16z M10,16c0-0.55-0.45-1-1-1H7v-2c0-0.55-0.45-1-1-1 c-0.55,0-1,0.45-1,1v2H3c-0.55,0-1,0.45-1,1c0,0.55,0.45,1,1,1h2v2c0,0.55,0.45,1,1,1c0.55,0,1-0.45,1-1v-2h2 C9.55,17,10,16.55,10,16z');
        $doc->addChild($l0I1);
    }
}
