<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class AddLocationAltTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M14,4.8V7h3v3h1.41c0.06,0.39,0.09,0.79,0.09,1.2c0,2.57-2.1,5.79-6.16,9.51L12,21.01l-0.34-0.31 C7.6,16.99,5.5,13.77,5.5,11.2c0-3.84,2.82-6.7,6.5-6.7C12.7,4.5,13.37,4.6,14,4.8z');
        $l0I1->setStyle('fill-opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M20,1v3h3v2h-3v3h-2V6h-3V4h3V1H20z M12,13c-1.1,0-2-0.9-2-2s0.9-2,2-2s2,0.9,2,2S13.1,13,12,13z M14,3.25v2.08 C13.38,5.11,12.7,5,12,5c-3.35,0-6,2.57-6,6.2c0,2.34,1.95,5.44,6,9.14c4.05-3.7,6-6.79,6-9.14c0-0.41-0.03-0.81-0.1-1.2h2.02 c0.05,0.39,0.08,0.79,0.08,1.2c0,3.32-2.67,7.25-8,11.8c-5.33-4.55-8-8.48-8-11.8C4,6.22,7.8,3,12,3C12.68,3,13.35,3.08,14,3.25z');
        $doc->addChild($l0I2);
    }
}
