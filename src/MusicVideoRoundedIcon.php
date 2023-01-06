<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['av'],
    tags: ['band', 'music', 'recording', 'screen', 'tv', 'video', 'watch'],
)]
final class MusicVideoRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M20,4H4C2.9,4,2,4.9,2,6v12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V6C22,4.9,21.1,4,20,4z M20,18H4V6h16V18z');
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M10.84,16.98c1.26-0.17,2.16-1.33,2.16-2.6L13,9h2c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1h-2c-0.55,0-1,0.45-1,1v4.51 c-0.46-0.35-1.02-0.54-1.66-0.51c-1.11,0.07-2.09,0.92-2.3,2.02C7.73,15.73,9.15,17.2,10.84,16.98z');
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
