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
    tags: ['broadway', 'comedy', 'event', 'movie', 'musical', 'places', 'show', 'standup', 'theater', 'tour', 'watch'],
)]
final class TheaterComedySharpIcon extends SVG
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
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M11,2v5.5h3.5v3.31C14.55,9.8,15.64,9,16.99,9c1.38,0,2.5,0.84,2.5,1.88H14.5v3.56C15.26,14.8,16.11,15,17,15 c3.31,0,6-2.69,6-6V2H11z M15,7.5c-0.55,0-1-0.45-1-1s0.45-1,1-1s1,0.45,1,1S15.55,7.5,15,7.5z M19,7.5c-0.55,0-1-0.45-1-1 s0.45-1,1-1s1,0.45,1,1S19.55,7.5,19,7.5z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M1,16c0,3.31,2.69,6,6,6s6-2.69,6-6V9H1V16z M7,17.88c-1.38,0-2.5-0.84-2.5-1.88h5C9.5,17.04,8.38,17.88,7,17.88z M9,12.5 c0.55,0,1,0.45,1,1s-0.45,1-1,1s-1-0.45-1-1S8.45,12.5,9,12.5z M5,12.5c0.55,0,1,0.45,1,1s-0.45,1-1,1s-1-0.45-1-1 S4.45,12.5,5,12.5z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
