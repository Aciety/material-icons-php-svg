<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['aid', 'covid', 'doctor', 'drug', 'emergency', 'hospital', 'immunity', 'injection', 'medical', 'medication', 'medicine', 'needle', 'pharmacy', 'sick', 'syringe', 'vaccination', 'vaccines', 'vial'],
)]
final class VaccinesSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12,5.5H8V4h1.5V2h-5v2H6v1.5H2v2c0,0,0.45,0,1,0V17h3v4l2,1.5V17h3V7.5c0.55,0,1,0,1,0V5.5z M9,9H6.5v1.5H9V12H6.5v1.5H9 L9,15H5V7.5h4V9z M19.5,10.5V10h1V8h-7l-0.01,2h1.01v0.5c0,0.5-1.5,1.16-1.5,3V22h8v-8.5C21,11.66,19.5,11,19.5,10.5z M16.5,10.5V10 h1v0.5c0,1.6,1.5,2,1.5,3V14h-4c0-0.21,0-0.39,0-0.5C15,12.5,16.5,12.1,16.5,10.5z M15,20c0,0,0-0.63,0-1.5h4V20H15z');
        $doc->addChild($l0I1);
    }
}
