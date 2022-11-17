<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['athlete', 'athletic', 'body', 'entertainment', 'exercise', 'hobby', 'human', 'people', 'person', 'sled', 'sledding', 'sledge', 'snow', 'social', 'sports', 'travel', 'winter'],
)]
final class SleddingRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M14,4.5c0,1.1-0.9,2-2,2s-2-0.9-2-2s0.9-2,2-2S14,3.4,14,4.5z M18.92,19.24c-0.13,0.39-0.55,0.61-0.95,0.48l-2.61-0.85 L14.9,20.3l3.32,1.08l0,0c1.31,0.43,2.72-0.29,3.15-1.61c0.36-1.12-0.11-2.32-1.07-2.91c-0.32-0.2-0.45-0.6-0.3-0.95 c0.2-0.44,0.71-0.57,1.12-0.31c1.52,0.95,2.25,2.85,1.68,4.62c-0.68,2.1-2.94,3.25-5.04,2.57h0L1.74,17.6 c-0.39-0.13-0.63-0.54-0.52-0.93c0.12-0.41,0.55-0.63,0.95-0.5l3.22,1.05l0.46-1.43l-3.19-1.04c-0.39-0.13-0.63-0.54-0.52-0.93 c0.12-0.41,0.55-0.63,0.95-0.5L4,13.6v-2.78c0-0.8,0.48-1.52,1.21-1.84c0.75-0.32,4.11-1.76,4.26-1.83 c0.41-0.18,0.89-0.21,1.35-0.04c0.91,0.34,1.37,1.36,1.07,2.28l-1.04,3.2L13,12.25c0.89-0.15,1.76,0.32,2.14,1.14l2.08,4.51 l1.22,0.4C18.84,18.42,19.05,18.84,18.92,19.24z M6,14.25l1.01,0.33c-0.22-0.42-0.28-0.92-0.12-1.4L7.92,10L6,10.82V14.25z M13.94,18.41l-6.66-2.16l-0.46,1.43l6.66,2.16L13.94,18.41z M14.63,17.05l-1.18-2.56l-3.97,0.89L14.63,17.05z');
        $doc->addChild($l0I1);
    }
}
