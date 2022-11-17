<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['action', 'auto', 'button', 'components', 'composer', 'function', 'interface', 'site', 'smart', 'special', 'stars', 'ui', 'ux', 'web', 'website'],
)]
final class SmartButtonRoundedIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M22,9v6c0,1.1-0.9,2-2,2h-1l0-2h1V9H4v6h6v2H4c-1.1,0-2-0.9-2-2V9c0-1.1,0.9-2,2-2h16C21.1,7,22,7.9,22,9z M14.04,17.99 c0.18,0.39,0.73,0.39,0.91,0l0.63-1.4l1.4-0.63c0.39-0.18,0.39-0.73,0-0.91l-1.4-0.63l-0.63-1.4c-0.18-0.39-0.73-0.39-0.91,0 l-0.63,1.4l-1.4,0.63c-0.39,0.18-0.39,0.73,0,0.91l1.4,0.63L14.04,17.99z M16.74,13.43c0.1,0.22,0.42,0.22,0.52,0l0.36-0.8 l0.8-0.36c0.22-0.1,0.22-0.42,0-0.52l-0.8-0.36l-0.36-0.8c-0.1-0.22-0.42-0.22-0.52,0l-0.36,0.8l-0.8,0.36 c-0.22,0.1-0.22,0.42,0,0.52l0.8,0.36L16.74,13.43z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
