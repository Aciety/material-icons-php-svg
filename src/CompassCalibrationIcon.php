<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['calibration', 'compass', 'connection', 'internet', 'location', 'maps', 'network', 'refresh', 'service', 'signal', 'wifi', 'wireless'],
)]
final class CompassCalibrationIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGCircle(cx: '12', cy: '17', r: '4');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M12 10.07c1.95 0 3.72.79 5 2.07l5-5C19.44 4.59 15.9 3 12 3S4.56 4.59 2 7.15l5 5c1.28-1.28 3.05-2.08 5-2.08z');
        $doc->addChild($l0I2);
    }
}
