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
final class NoteAltIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M19,3h-4.18C14.4,1.84,13.3,1,12,1S9.6,1.84,9.18,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5 C21,3.9,20.1,3,19,3z M12,2.75c0.41,0,0.75,0.34,0.75,0.75S12.41,4.25,12,4.25s-0.75-0.34-0.75-0.75S11.59,2.75,12,2.75z M9.1,17H7 v-2.14l5.96-5.96l2.12,2.12L9.1,17z M16.85,9.27l-1.06,1.06l-2.12-2.12l1.06-1.06c0.2-0.2,0.51-0.2,0.71,0l1.41,1.41 C17.05,8.76,17.05,9.07,16.85,9.27z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
