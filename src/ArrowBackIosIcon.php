<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['app', 'application', 'arrow', 'back', 'chevron', 'components', 'direction', 'disable_ios', 'interface', 'ios', 'left', 'navigation', 'previous', 'screen', 'site', 'ui', 'ux', 'web', 'website'],
)]
final class ArrowBackIosIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M11.67 3.87L9.9 2.1 0 12l9.9 9.9 1.77-1.77L3.54 12z');
        $doc->addChild($l0I1);
    }
}
