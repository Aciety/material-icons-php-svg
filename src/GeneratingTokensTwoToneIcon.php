<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['access', 'api', 'coin', 'generating', 'shape', 'stars', 'tokens'],
)]
final class GeneratingTokensTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M9,6c-3.31,0-6,2.69-6,6s2.69,6,6,6s6-2.69,6-6S12.31,6,9,6z M12,10.5h-2v5H8v-5H6V9h6V10.5z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M9,4c-4.42,0-8,3.58-8,8c0,4.42,3.58,8,8,8s8-3.58,8-8C17,7.58,13.42,4,9,4z M9,18c-3.31,0-6-2.69-6-6s2.69-6,6-6 s6,2.69,6,6S12.31,18,9,18z M12,10.5h-2v5H8v-5H6V9h6V10.5z M20.25,3.75L23,5l-2.75,1.25L19,9l-1.25-2.75L15,5l2.75-1.25L19,1 L20.25,3.75z M20.25,17.75L23,19l-2.75,1.25L19,23l-1.25-2.75L15,19l2.75-1.25L19,15L20.25,17.75z');
        $doc->addChild($l0I2);
    }
}
