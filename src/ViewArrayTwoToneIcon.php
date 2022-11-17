<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['array', 'design', 'format', 'grid', 'layout', 'view', 'website'],
)]
final class ViewArrayTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGRect(x: '9', y: '7', width: '6', height: '10');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M15,7v10H9V7H15z M21,5h-3v14h3V5z M17,5H7v14h10V5z M6,5H3v14h3V5z');
        $doc->addChild($l0I2);
    }
}
