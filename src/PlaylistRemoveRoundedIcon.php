<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['av'],
    tags: ['-', 'collection', 'list', 'minus', 'music', 'playlist', 'remove'],
)]
final class PlaylistRemoveRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M13.71,21.3c0.39,0.39,1.02,0.39,1.41,0L17,19.41l1.89,1.89c0.39,0.39,1.02,0.39,1.41,0s0.39-1.02,0-1.41L18.41,18 l1.89-1.89c0.39-0.39,0.39-1.02,0-1.41s-1.02-0.39-1.41,0L17,16.59l-1.89-1.89c-0.39-0.39-1.02-0.39-1.41,0s-0.39,1.02,0,1.41 L15.59,18l-1.89,1.89C13.32,20.27,13.32,20.91,13.71,21.3z M14,11c0-0.55-0.45-1-1-1H4c-0.55,0-1,0.45-1,1s0.45,1,1,1h9 C13.55,12,14,11.55,14,11z M14,7c0-0.55-0.45-1-1-1H4C3.45,6,3,6.45,3,7s0.45,1,1,1h9C13.55,8,14,7.55,14,7z M3,15 c0,0.55,0.45,1,1,1h5c0.55,0,1-0.45,1-1s-0.45-1-1-1H4C3.45,14,3,14.45,3,15z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
