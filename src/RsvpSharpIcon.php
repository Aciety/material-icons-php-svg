<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['alphabet', 'character', 'font', 'invitation', 'invite', 'letter', 'plaît', 'respond', 'rsvp', 'répondez', 'sil', 'symbol', 'text', 'type', 'vous'],
)]
final class RsvpSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M16,9h1.5l-1.75,6h-1.5L12.5,9H14l1,3.43L16,9z M5.14,13L6,15H4.5l-0.85-2H2.5v2H1V9h5v4L5.14,13z M4.5,10.5h-2v1h2V10.5z M23,13h-3.5v2H18V9h5V13z M21.5,10.5h-2v1h2V10.5z M11.5,9v1.5h-3v0.75h3V15H7v-1.5h3v-0.75H7V9H11.5z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
