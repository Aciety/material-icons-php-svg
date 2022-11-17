<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['architecture', 'attraction', 'building', 'estate', 'event', 'exhibition', 'explore', 'local', 'museum', 'places', 'real', 'see', 'shop', 'store', 'tour'],
)]
final class MuseumRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M21.5,11c0.28,0,0.5-0.22,0.5-0.5V9.26c0-0.16-0.08-0.32-0.21-0.41L12.57,2.4c-0.34-0.24-0.8-0.24-1.15,0L2.21,8.85 C2.08,8.94,2,9.1,2,9.26v1.24C2,10.78,2.22,11,2.5,11H4v9H3c-0.55,0-1,0.45-1,1c0,0.55,0.45,1,1,1h18c0.55,0,1-0.45,1-1 c0-0.55-0.45-1-1-1h-1v-9H21.5z M16,17c0,0.55-0.45,1-1,1s-1-0.45-1-1v-3l-1.17,1.75c-0.4,0.59-1.27,0.59-1.66,0L10,14v3 c0,0.55-0.45,1-1,1s-1-0.45-1-1v-4.7C8,11.58,8.58,11,9.3,11h0c0.43,0,0.84,0.22,1.08,0.58L12,14l1.61-2.42 C13.86,11.22,14.26,11,14.7,11h0c0.72,0,1.3,0.58,1.3,1.3V17z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
