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
    tags: ['badge', 'card', 'health', 'id', 'information', 'medical', 'services'],
)]
final class MedicalInformationRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M20,7h-5V4c0-1.1-0.9-2-2-2h-2C9.9,2,9,2.9,9,4v3H4C2.9,7,2,7.9,2,9v11c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V9 C22,7.9,21.1,7,20,7z M11,4h2v5h-2V4z M7,16H6c-0.55,0-1-0.45-1-1s0.45-1,1-1h1v-1c0-0.55,0.45-1,1-1s1,0.45,1,1v1h1 c0.55,0,1,0.45,1,1s-0.45,1-1,1H9v1c0,0.55-0.45,1-1,1s-1-0.45-1-1V16z M13.75,14.5c-0.41,0-0.75-0.34-0.75-0.75S13.34,13,13.75,13 h4.5c0.41,0,0.75,0.34,0.75,0.75s-0.34,0.75-0.75,0.75H13.75z M13.75,17.5c-0.41,0-0.75-0.34-0.75-0.75S13.34,16,13.75,16h2.5 c0.41,0,0.75,0.34,0.75,0.75s-0.34,0.75-0.75,0.75H13.75z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
