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
    tags: ['arrows', 'directions', 'dots', 'left', 'maps', 'multiple', 'navigation', 'right', 'stop'],
)]
final class MultipleStopSharpIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M17,4l4,4l-4,4V9h-4V7h4V4z M7,17h4v-2H7v-3l-4,4l4,4V17z M19,15h-2v2h2V15z M15,15h-2v2h2V15z M11,7H9v2h2V7z M7,7H5v2h2 V7z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
