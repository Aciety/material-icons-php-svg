<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['app', 'application', 'arrow', 'components', 'direction', 'interface', 'left', 'navigation', 'screen', 'site', 'ui', 'ux', 'web', 'website'],
)]
final class ArrowLeftIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M14 7l-5 5 5 5V7z');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M24 0v24H0V0h24z');
        $l0I1->setStyle('fill', 'none');
        $doc->addChild($l0I1);
    }
}
