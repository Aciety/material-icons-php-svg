<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['app', 'application', 'arrow', 'back', 'chevron', 'components', 'direction', 'disable_ios', 'interface', 'ios', 'left', 'navigation', 'previous', 'screen', 'site', 'ui', 'ux', 'web', 'website'],
)]
final class ArrowBackIosRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $l0I0->setStyle('opacity', '.87');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M16.62 2.99c-.49-.49-1.28-.49-1.77 0L6.54 11.3c-.39.39-.39 1.02 0 1.41l8.31 8.31c.49.49 1.28.49 1.77 0s.49-1.28 0-1.77L9.38 12l7.25-7.25c.48-.48.48-1.28-.01-1.76z');
        $doc->addChild($l0I1);
    }
}
