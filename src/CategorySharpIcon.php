<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['categories', 'category', 'circle', 'collection', 'items', 'product', 'sort', 'square', 'triangle'],
)]
final class CategorySharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12 2l-5.5 9h11z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '17.5', cy: '17.5', r: '4.5');
        $doc->addChild($l0I2);
        $l0I3 = new SVGPath(d: 'M3 13.5h8v8H3z');
        $doc->addChild($l0I3);
    }
}
