<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['6', 'apart', 'body', 'covid', 'distance', 'feet', 'ft', 'human', 'people', 'person', 'social'],
)]
final class SixFtApartOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: '0', y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M6,6c1.1,0,2-0.9,2-2S7.1,2,6,2S4,2.9,4,4S4.9,6,6,6z M10,9.43c0-0.81-0.48-1.53-1.22-1.85C7.93,7.21,6.99,7,6,7 C5.01,7,4.07,7.21,3.22,7.58C2.48,7.9,2,8.62,2,9.43V10h8V9.43z M18,6c1.1,0,2-0.9,2-2s-0.9-2-2-2s-2,0.9-2,2S16.9,6,18,6z M22,9.43 c0-0.81-0.48-1.53-1.22-1.85C19.93,7.21,18.99,7,18,7c-0.99,0-1.93,0.21-2.78,0.58C14.48,7.9,14,8.62,14,9.43V10h8V9.43z M19,17 v-2.01L5,15v2l-3-3l3-3v2.01L19,13v-2l3,3L19,17z M10,19v-1H7.5C7.22,18,7,18.22,7,18.5v3C7,21.78,7.22,22,7.5,22h2 c0.28,0,0.5-0.22,0.5-0.5V20c0-0.28-0.22-0.5-0.5-0.5H8V19H10z M9,20.5V21H8v-0.5H9z M17.5,19h-1v3h-1v-3h-1v-1h3V19z M12.5,19v0.5 h1v1h-1V22h-1v-4H14v1H12.5z');
        $doc->addChild($l0I1);
    }
}
