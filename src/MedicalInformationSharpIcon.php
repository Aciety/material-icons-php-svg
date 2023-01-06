<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['badge', 'card', 'health', 'id', 'information', 'medical', 'services'],
)]
final class MedicalInformationSharpIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M22,7h-7V2H9v5H2v15h20V7z M11,4h2v5h-2V4z M11,16H9v2H7v-2H5v-2h2v-2h2v2h2V16z M13,14.5V13h6v1.5H13z M13,17.5V16h4v1.5 H13z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
