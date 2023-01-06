<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['social'],
    tags: ['aid', 'covid', 'doctor', 'drug', 'emergency', 'hospital', 'immunity', 'injection', 'medical', 'medication', 'medicine', 'needle', 'pharmacy', 'sick', 'syringe', 'vaccination', 'vaccines', 'vial'],
)]
final class VaccinesRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M7,22.5c0.55,0,1-0.45,1-1V17h1c1.1,0,2-0.9,2-2V7.5c0.55,0,1-0.45,1-1c0-0.55-0.45-1-1-1H8V4h0.5c0.55,0,1-0.45,1-1 c0-0.55-0.45-1-1-1h-3c-0.55,0-1,0.45-1,1c0,0.55,0.45,1,1,1H6v1.5H3c-0.55,0-1,0.45-1,1c0,0.55,0.45,1,1,1V15c0,1.1,0.9,2,2,2h1 v4.5C6,22.05,6.45,22.5,7,22.5z M9,9H7.25C6.84,9,6.5,9.34,6.5,9.75c0,0.41,0.34,0.75,0.75,0.75H9V12H7.25 c-0.41,0-0.75,0.34-0.75,0.75c0,0.41,0.34,0.75,0.75,0.75H9L9,15H5V7.5h4V9z M19.5,10.5V10c0.55,0,1-0.45,1-1c0-0.55-0.45-1-1-1h-5 c-0.55,0-1,0.45-1,1c0,0.55,0.45,1,1,1v0.5c0,0.5-1.5,1.16-1.5,3V20c0,1.1,0.9,2,2,2h4c1.1,0,2-0.9,2-2v-6.5 C21,11.66,19.5,11,19.5,10.5z M16.5,10.5V10h1v0.5c0,1.6,1.5,2,1.5,3V14h-4c0-0.21,0-0.39,0-0.5C15,12.5,16.5,12.1,16.5,10.5z M15,20c0,0,0-0.63,0-1.5h4V20H15z');
        $doc->addChild($l0I1);
    }
}
