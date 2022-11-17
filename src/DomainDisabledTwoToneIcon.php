<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['apartment', 'architecture', 'building', 'business', 'company', 'disabled', 'domain', 'enabled', 'estate', 'home', 'internet', 'maps', 'off', 'office', 'offline', 'on', 'place', 'real', 'residence', 'residential', 'slash', 'web', 'website'],
)]
final class DomainDisabledTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M1.41 1.69L0 3.1l2 2V21h15.9l3 3 1.41-1.41-20.9-20.9zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm-2-4V9h2v2H4zm6 8H8v-2h2v2zm-2-4v-2h2v2H8zm4 4v-2h1.9l2 2H12zM8 5h2v2h-.45L12 9.45V9h8v8.45l2 2V7H12V3H5.55L8 5.45zm8 6h2v2h-2z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M12 9v.45l8 8V9h-8zm6 4h-2v-2h2v2z');
        $l0I2->setStyle('opacity', '.3');
        $doc->addChild($l0I2);
    }
}
