<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['places'],
    tags: ['building', 'door', 'doorway', 'entrance', 'gear', 'home', 'house', 'interior', 'office', 'open', 'preferences', 'room', 'settings'],
)]
final class RoomPreferencesRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M21.75,17c0-0.22-0.03-0.42-0.06-0.63l0.84-0.73c0.18-0.16,0.22-0.42,0.1-0.63l-0.59-1.02c-0.12-0.21-0.37-0.3-0.59-0.22 l-1.06,0.36c-0.32-0.27-0.68-0.48-1.08-0.63l-0.22-1.09c-0.05-0.23-0.25-0.4-0.49-0.4h-1.18c-0.24,0-0.44,0.17-0.49,0.4l-0.22,1.09 c-0.4,0.15-0.76,0.36-1.08,0.63l-1.06-0.36c-0.23-0.08-0.47,0.02-0.59,0.22l-0.59,1.02c-0.12,0.21-0.08,0.47,0.1,0.63l0.84,0.73 c-0.03,0.21-0.06,0.41-0.06,0.63s0.03,0.42,0.06,0.63l-0.84,0.73c-0.18,0.16-0.22,0.42-0.1,0.63l0.59,1.02 c0.12,0.21,0.37,0.3,0.59,0.22l1.06-0.36c0.32,0.27,0.68,0.48,1.08,0.63l0.22,1.09c0.05,0.23,0.25,0.4,0.49,0.4h1.18 c0.24,0,0.44-0.17,0.49-0.4l0.22-1.09c0.4-0.15,0.76-0.36,1.08-0.63l1.06,0.36c0.23,0.08,0.47-0.02,0.59-0.22l0.59-1.02 c0.12-0.21,0.08-0.47-0.1-0.63l-0.84-0.73C21.72,17.42,21.75,17.22,21.75,17z M18,19c-1.1,0-2-0.9-2-2s0.9-2,2-2s2,0.9,2,2 S19.1,19,18,19z M14,11.26V6h3v4h2V5c0-0.55-0.45-1-1-1h-4c0-0.55-0.45-1-1-1H6C5.45,3,5,3.45,5,4v15H4c-0.55,0-1,0.45-1,1 s0.45,1,1,1h8.26C11.47,19.87,11,18.49,11,17C11,14.62,12.19,12.53,14,11.26z M10,12c0-0.55,0.45-1,1-1s1,0.45,1,1 c0,0.55-0.45,1-1,1S10,12.55,10,12z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
