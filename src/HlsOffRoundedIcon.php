<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['[offline]', 'alphabet', 'character', 'develop', 'developer', 'disabled', 'enabled', 'engineer', 'engineering', 'font', 'hls', 'letter', 'off', 'on', 'platform', 'slash', 'symbol', 'text', 'type'],
)]
final class HlsOffRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M17.83,15h1.67c0.55,0,1-0.45,1-1v-1.5c0-0.55-0.45-1-1-1H17v-1l2.04,0c0.1,0.29,0.38,0.5,0.71,0.5 c0.41,0,0.75-0.34,0.75-0.75V10c0-0.55-0.45-1-1-1h-3c-0.55,0-1,0.45-1,1v1.5c0,0.55,0.45,1,1,1H19v1h-2.04v0 c-0.1-0.29-0.38-0.5-0.71-0.5c-0.12,0-0.24,0.03-0.34,0.08L17.83,15z M19.07,21.9c0.39,0.39,1.02,0.39,1.41,0s0.39-1.02,0-1.41 L3.51,3.51c-0.39-0.39-1.02-0.39-1.41,0s-0.39,1.02,0,1.41l4.48,4.48C6.53,9.51,6.5,9.63,6.5,9.75V11h-2V9.75 C4.5,9.34,4.16,9,3.75,9S3,9.34,3,9.75v4.5C3,14.66,3.34,15,3.75,15s0.75-0.34,0.75-0.75V12.5h2v1.75C6.5,14.66,6.84,15,7.25,15 S8,14.66,8,14.25v-3.42l2,2V14c0,0.55,0.45,1,1,1h1.17L19.07,21.9z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
