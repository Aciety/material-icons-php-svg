<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['av'],
    tags: ['circle', 'control', 'controls', 'music', 'pause', 'play', 'square', 'stop', 'video'],
)]
final class StopCircleRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12,2C6.48,2,2,6.48,2,12c0,5.52,4.48,10,10,10s10-4.48,10-10C22,6.48,17.52,2,12,2z M15,16H9c-0.55,0-1-0.45-1-1V9 c0-0.55,0.45-1,1-1h6c0.55,0,1,0.45,1,1v6C16,15.55,15.55,16,15,16z');
        $doc->addChild($l0I1);
    }
}
