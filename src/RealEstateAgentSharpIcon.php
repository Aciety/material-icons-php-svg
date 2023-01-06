<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['social'],
    tags: ['agent', 'architecture', 'broker', 'estate', 'hand', 'home', 'house', 'loan', 'mortgage', 'property', 'real', 'residence', 'residential', 'sales', 'social'],
)]
final class RealEstateAgentSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M1,22h4V11H1V22z M14,1.5l-7,5V9h2l10,4v2h2V6.5L14,1.5z M13.5,10h-1V9h1V10z M13.5,8h-1V7h1V8z M15.5,10h-1V9h1V10z M15.5,8h-1V7h1V8z M22,19l-8,3l-7-1.98V11h1.97L17,14l0,2h-4l-1.76-0.68l-0.33,0.94L13,17h9V19z');
        $doc->addChild($l0I1);
    }
}
