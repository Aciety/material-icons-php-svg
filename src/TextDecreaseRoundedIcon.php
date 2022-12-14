<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['-', 'alphabet', 'character', 'decrease', 'font', 'letter', 'minus', 'remove', 'resize', 'subtract', 'symbol', 'text', 'type'],
)]
final class TextDecreaseRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M2.61,19L2.61,19c0.48,0,0.91-0.3,1.06-0.75l1.01-2.83h5.65l0.99,2.82C11.48,18.7,11.91,19,12.39,19 c0.79,0,1.33-0.79,1.05-1.52L9.19,6.17C8.93,5.47,8.25,5,7.5,5S6.07,5.47,5.81,6.17L1.56,17.48C1.28,18.21,1.83,19,2.61,19z M7.44,7.6h0.12l2.03,5.79H5.41L7.44,7.6z M15,12c0-0.55,0.45-1,1-1h6c0.55,0,1,0.45,1,1s-0.45,1-1,1h-6C15.45,13,15,12.55,15,12z');
        $doc->addChild($l0I1);
    }
}
