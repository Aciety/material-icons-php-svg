<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['app', 'application desktop', 'device', 'pause', 'present', 'presentation', 'screen', 'share', 'site', 'slides', 'web', 'website', 'window', 'www'],
)]
final class PausePresentationIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M21 19.1H3V5h18v14.1zM21 3H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M21 19.1H3V5h18v14.1zM21 3H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z');
        $l0I2->setStyle('fill', 'none');
        $doc->addChild($l0I2);
        $l0I3 = new SVGPath(d: 'M9 8h2v8H9zm4 0h2v8h-2z');
        $doc->addChild($l0I3);
    }
}
