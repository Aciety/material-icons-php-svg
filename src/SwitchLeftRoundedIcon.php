<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['arrows', 'directional', 'left', 'navigation', 'switch', 'toggle'],
)]
final class SwitchLeftRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M8.5,8.62v6.76L5.12,12L8.5,8.62 M3.71,11.29c-0.39,0.39-0.39,1.02,0,1.41l4.59,4.59C8.92,17.92,10,17.48,10,16.59V7.41 c0-0.89-1.08-1.34-1.71-0.71L3.71,11.29z M14,7.41v9.17c0,0.89,1.08,1.34,1.71,0.71l4.59-4.59c0.39-0.39,0.39-1.02,0-1.41 l-4.59-4.59C15.08,6.08,14,6.52,14,7.41z');
        $doc->addChild($l0I1);
    }
}
