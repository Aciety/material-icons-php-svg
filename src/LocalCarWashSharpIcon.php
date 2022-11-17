<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['automobile', 'car', 'cars', 'local', 'maps', 'transportation', 'travel', 'vehicle', 'wash'],
)]
final class LocalCarWashSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M18.58 7H5.43L3 14v9h3v-2h12v2h3v-9l-2.42-7zM6.5 18c-.83 0-1.5-.67-1.5-1.5S5.67 15 6.5 15s1.5.67 1.5 1.5S7.33 18 6.5 18zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 13l1.5-4.5h11L19 13H5zm12-8c.83 0 1.5-.67 1.5-1.5 0-1-1.5-2.7-1.5-2.7s-1.5 1.7-1.5 2.7c0 .83.67 1.5 1.5 1.5zm-5 0c.83 0 1.5-.67 1.5-1.5 0-1-1.5-2.7-1.5-2.7s-1.5 1.7-1.5 2.7c0 .83.67 1.5 1.5 1.5zM7 5c.83 0 1.5-.67 1.5-1.5C8.5 2.5 7 .8 7 .8S5.5 2.5 5.5 3.5C5.5 4.33 6.17 5 7 5z');
        $doc->addChild($l0I1);
    }
}
