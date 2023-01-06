<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['automobile', 'cab', 'call', 'car', 'cars', 'direction', 'local', 'lyft', 'maps', 'public', 'taxi', 'transportation', 'uber', 'vehicle', 'yellow'],
)]
final class LocalTaxiTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M5.12 12l-.12.34V17h14v-4.66l-.12-.34H5.12zm2.38 4c-.83 0-1.5-.67-1.5-1.5S6.67 13 7.5 13s1.5.67 1.5 1.5S8.33 16 7.5 16zm9 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M17.5 5H15V3H9v2H6.5c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99C18.72 5.42 18.16 5 17.5 5zM6.85 7h10.29l1.04 3H5.81l1.04-3zM19 17H5v-4.66l.12-.34h13.77l.11.34V17z');
        $doc->addChild($l0I2);
        $l0I3 = new SVGCircle(cx: '7.5', cy: '14.5', r: '1.5');
        $doc->addChild($l0I3);
        $l0I4 = new SVGCircle(cx: '16.5', cy: '14.5', r: '1.5');
        $doc->addChild($l0I4);
    }
}
