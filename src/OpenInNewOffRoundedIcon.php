<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['action'],
    tags: ['arrow', 'box', 'disabled', 'enabled', 'export', 'in', 'new', 'off', 'on', 'open', 'slash', 'window'],
)]
final class OpenInNewOffRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M16.79,5.8l-1.94-1.94C14.54,3.54,14.76,3,15.21,3h5.29C20.78,3,21,3.22,21,3.5v5.29c0,0.45-0.54,0.67-0.85,0.35L18.21,7.2 l-4.09,4.09l-1.41-1.41L16.79,5.8z M19,13v3.17l2,2V13c0-0.55-0.45-1-1-1H20C19.45,12,19,12.45,19,13z M19.07,21.9l-0.9-0.9H5 c-1.11,0-2-0.9-2-2V5.83l-0.9-0.9c-0.39-0.39-0.39-1.02,0-1.41l0,0c0.39-0.39,1.02-0.39,1.41,0l16.97,16.97 c0.39,0.39,0.39,1.02,0,1.41l0,0C20.09,22.29,19.46,22.29,19.07,21.9z M16.17,19l-4.88-4.88L10.41,15c-0.39,0.39-1.02,0.39-1.41,0 l0,0c-0.39-0.39-0.39-1.02,0-1.41l0.88-0.88L5,7.83V19H16.17z M7.83,5H11c0.55,0,1-0.45,1-1V4c0-0.55-0.45-1-1-1H5.83L7.83,5z');
        $doc->addChild($l0I1);
    }
}
