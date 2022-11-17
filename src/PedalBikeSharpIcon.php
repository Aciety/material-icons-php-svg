<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['automobile', 'bicycle', 'bike', 'car', 'cars', 'direction', 'human', 'maps', 'pedal', 'public', 'route', 'scooter', 'transportation', 'vehicle', 'vespa'],
)]
final class PedalBikeSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M18.18,10L16,4h-4v2h2.6l1.46,4h-4.81l-0.36-1H12V7H7v2h1.75l1.82,5H9.9c-0.44-2.23-2.31-3.88-4.65-3.99 C2.45,9.87,0,12.2,0,15c0,2.8,2.2,5,5,5c2.46,0,4.45-1.69,4.9-4h4.2c0.44,2.23,2.31,3.88,4.65,3.99c2.8,0.13,5.25-2.19,5.25-5 c0-2.8-2.2-5-5-5H18.18z M7.82,16c-0.4,1.17-1.49,2-2.82,2c-1.68,0-3-1.32-3-3s1.32-3,3-3c1.33,0,2.42,0.83,2.82,2H5v2H7.82z M14.1,14h-1.4l-0.73-2H15C14.56,12.58,14.24,13.25,14.1,14z M19,18c-1.68,0-3-1.32-3-3c0-0.93,0.41-1.73,1.05-2.28l0.96,2.64 l1.88-0.68l-0.97-2.67c0.03,0,0.06-0.01,0.09-0.01c1.68,0,3,1.32,3,3S20.68,18,19,18z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
