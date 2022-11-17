<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['alt', 'clipboard', 'document', 'file', 'memo', 'note', 'page', 'paper', 'writing'],
)]
final class NoteAltSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M21,3h-6.18C14.4,1.84,13.3,1,12,1S9.6,1.84,9.18,3H3v18h18V3z M12,2.75c0.41,0,0.75,0.34,0.75,0.75S12.41,4.25,12,4.25 s-0.75-0.34-0.75-0.75S11.59,2.75,12,2.75z M9.1,17H7v-2.14l5.96-5.96l2.12,2.12L9.1,17z M17.2,8.91l-1.41,1.41L13.66,8.2 l1.41-1.41L17.2,8.91z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
