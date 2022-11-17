<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['app', 'application', 'arrow', 'components', 'direction', 'drop', 'interface', 'navigation', 'screen', 'site', 'ui', 'up', 'ux', 'web', 'website'],
)]
final class ArrowDropUpRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M8.71 12.29L11.3 9.7c.39-.39 1.02-.39 1.41 0l2.59 2.59c.63.63.18 1.71-.71 1.71H9.41c-.89 0-1.33-1.08-.7-1.71z');
        $doc->addChild($l0I1);
    }
}
