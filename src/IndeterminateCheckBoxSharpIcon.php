<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['toggle'],
    tags: ['app', 'application', 'box', 'button', 'check', 'components', 'control', 'design', 'form', 'indeterminate', 'interface', 'screen', 'select', 'selected', 'selection', 'site', 'square', 'toggle', 'ui', 'undetermined', 'ux', 'web', 'website'],
)]
final class IndeterminateCheckBoxSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M21 3H3v18h18V3zm-4 10H7v-2h10v2z');
        $doc->addChild($l0I1);
    }
}
