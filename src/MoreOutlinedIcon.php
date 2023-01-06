<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['3', 'archive', 'bookmark', 'dots', 'etc', 'favorite', 'indent', 'label', 'more', 'remember', 'save', 'stamp', 'sticker', 'tab', 'tag', 'three'],
)]
final class MoreOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M22 3H7c-.69 0-1.23.35-1.59.88L0 12l5.41 8.11c.36.53.97.89 1.66.89H22c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H7.07L2.4 12l4.66-7H22v14z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '9', cy: '12', r: '1.5');
        $doc->addChild($l0I2);
        $l0I3 = new SVGCircle(cx: '14', cy: '12', r: '1.5');
        $doc->addChild($l0I3);
        $l0I4 = new SVGCircle(cx: '19', cy: '12', r: '1.5');
        $doc->addChild($l0I4);
    }
}
