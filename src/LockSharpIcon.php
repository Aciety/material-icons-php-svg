<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['lock', 'locked', 'password', 'privacy', 'private', 'protection', 'safety', 'secure', 'security'],
)]
final class LockSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l1I1->setStyle('opacity', '.87');
        $l0I0->addChild($l1I1);
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20 8h-3V6.21c0-2.61-1.91-4.94-4.51-5.19C9.51.74 7 3.08 7 6v2H4v14h16V8zm-8 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zM9 8V6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9z');
        $doc->addChild($l0I1);
    }
}
