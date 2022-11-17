<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['av'],
    tags: ['accessible', 'alphabet', 'caption', 'cc', 'character', 'closed', 'decoder', 'disabled', 'enabled', 'font', 'language', 'letter', 'media', 'movies', 'off', 'on', 'slash', 'subtitle', 'subtitles', 'symbol', 'text', 'tv', 'type'],
)]
final class ClosedCaptionDisabledOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M13,10c0-0.55,0.45-1,1-1h3c0.55,0,1,0.45,1,1v1h-1.5v-0.5h-2v1L13,10z M16.5,13.5l1.21,1.21C17.89,14.52,18,14.27,18,14v-1 h-1.5V13.5z M8.83,6H19v10.17l1.98,1.98c0-0.05,0.02-0.1,0.02-0.16V6c0-1.1-0.9-2-2-2H6.83L8.83,6z M19.78,22.61L17.17,20H5 c-1.11,0-2-0.9-2-2V6c0-0.05,0.02-0.1,0.02-0.15L1.39,4.22l1.41-1.41l18.38,18.38L19.78,22.61z M7.5,13.5h2V13h0.67l-2.5-2.5H7.5 V13.5z M15.17,18L11,13.83V14c0,0.55-0.45,1-1,1H7c-0.55,0-1-0.45-1-1v-4c0-0.32,0.16-0.59,0.4-0.78L5,7.83V18H15.17z');
        $doc->addChild($l0I1);
    }
}
