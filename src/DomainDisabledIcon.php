<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['apartment', 'architecture', 'building', 'business', 'company', 'disabled', 'domain', 'enabled', 'estate', 'home', 'internet', 'maps', 'off', 'office', 'offline', 'on', 'place', 'real', 'residence', 'residential', 'slash', 'web', 'website'],
)]
final class DomainDisabledIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0zm0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M8 5h2v2h-.9L12 9.9V9h8v8.9l2 2V7H12V3H5.1L8 5.9zm8 6h2v2h-2zM1.3 1.8L.1 3.1 2 5v16h16l3 3 1.3-1.3-21-20.9zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm4 8H8v-2h2v2zm0-4H8v-2h2v2zm2 4v-2h2l2 2h-4z');
        $doc->addChild($l0I1);
    }
}
