<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['apartment', 'architecture', 'building', 'business', 'company', 'disabled', 'domain', 'enabled', 'estate', 'home', 'internet', 'maps', 'off', 'office', 'offline', 'on', 'place', 'real', 'residence', 'residential', 'slash', 'web', 'website'],
)]
final class DomainDisabledRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M.71 2.39c-.39.39-.39 1.02 0 1.41L2 5.1V19c0 1.1.9 2 2 2h13.9l2.29 2.29c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L2.12 2.39C1.73 2 1.1 2 .71 2.39zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm-2-4V9h2v2H4zm6 8H8v-2h2v2zm-2-4v-2h2v2H8zm4 4v-2h1.9l2 2H12zM8 5h2v2h-.45L12 9.45V9h7c.55 0 1 .45 1 1v7.45l2 2V9c0-1.1-.9-2-2-2h-8V5c0-1.1-.9-2-2-2H5.55L8 5.45V5zm8 6h2v2h-2z');
        $doc->addChild($l0I1);
    }
}
