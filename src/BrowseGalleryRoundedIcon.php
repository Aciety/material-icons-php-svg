<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['clock', 'collection', 'gallery', 'library', 'stack', 'watch'],
)]
final class BrowseGalleryRoundedIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M9,3c-4.97,0-9,4.03-9,9s4.03,9,9,9s9-4.03,9-9S13.97,3,9,3z M11.09,15.5L8.59,13C8.21,12.62,8,12.12,8,11.59V8 c0-0.55,0.45-1,1-1h0c0.55,0,1,0.45,1,1v3.59l2.5,2.5c0.39,0.39,0.39,1.02,0,1.41l0,0C12.11,15.89,11.48,15.89,11.09,15.5z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M17.99,5.08L17.99,5.08c0,0.37,0.21,0.69,0.53,0.88C20.6,7.17,22,9.42,22,12c0,2.58-1.4,4.83-3.48,6.04 c-0.32,0.19-0.53,0.51-0.53,0.88v0c0,0.77,0.84,1.25,1.51,0.86C22.18,18.22,24,15.32,24,12c0-3.32-1.82-6.22-4.5-7.78 C18.83,3.83,17.99,4.31,17.99,5.08z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
