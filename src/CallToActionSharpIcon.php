<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['av'],
    tags: ['action', 'alert', 'bar', 'call', 'components', 'cta', 'design', 'info', 'information', 'interface', 'layout', 'message', 'notification', 'screen', 'site', 'to', 'ui', 'ux', 'web', 'website', 'window'],
)]
final class CallToActionSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M23 3H1v18h22V3zm-2 16H3v-3h18v3z');
        $doc->addChild($l0I1);
    }
}
