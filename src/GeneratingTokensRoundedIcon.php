<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['access', 'api', 'coin', 'generating', 'shape', 'stars', 'tokens'],
)]
final class GeneratingTokensRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M9,4c-4.42,0-8,3.58-8,8c0,4.42,3.58,8,8,8s8-3.58,8-8C17,7.58,13.42,4,9,4z M9,15.5c-0.55,0-1-0.45-1-1v-4H6.75 C6.34,10.5,6,10.16,6,9.75S6.34,9,6.75,9h4.5C11.66,9,12,9.34,12,9.75s-0.34,0.75-0.75,0.75H10v4C10,15.05,9.55,15.5,9,15.5z M20.25,3.75L22,4.54c0.39,0.18,0.39,0.73,0,0.91l-1.75,0.79L19.46,8c-0.18,0.39-0.73,0.39-0.91,0l-0.79-1.75L16,5.46 c-0.39-0.18-0.39-0.73,0-0.91l1.75-0.79L18.54,2c0.18-0.39,0.73-0.39,0.91,0L20.25,3.75z M20.25,17.75L22,18.54 c0.39,0.18,0.39,0.73,0,0.91l-1.75,0.79L19.46,22c-0.18,0.39-0.73,0.39-0.91,0l-0.79-1.75L16,19.46c-0.39-0.18-0.39-0.73,0-0.91 l1.75-0.79L18.54,16c0.18-0.39,0.73-0.39,0.91,0L20.25,17.75z');
        $doc->addChild($l0I1);
    }
}
