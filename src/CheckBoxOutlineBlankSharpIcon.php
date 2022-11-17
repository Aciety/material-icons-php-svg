<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['toggle'],
    tags: ['blank', 'box', 'button', 'check', 'component', 'control', 'deselected', 'empty', 'form', 'outline', 'select', 'selection', 'square', 'tick', 'toggle', 'ui'],
)]
final class CheckBoxOutlineBlankSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19 5v14H5V5h14m2-2H3v18h18V3z');
        $doc->addChild($l0I1);
    }
}
