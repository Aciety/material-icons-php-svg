<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['alt', 'edit', 'location', 'pen', 'pencil', 'pin'],
)]
final class EditLocationAltOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M11,11h2.12l6.16-6.16l-2.12-2.12L11,8.88V11z M20.71,2L20,1.29c-0.39-0.39-1.02-0.39-1.41,0l-0.72,0.72l2.12,2.12 l0.72-0.72C21.1,3.02,21.1,2.39,20.71,2z M17.9,9.05C17.96,9.41,18,9.79,18,10.2c0,1.71-1.08,4.64-6,9.14c-4.92-4.49-6-7.43-6-9.14 C6,6.17,9.09,4,12,4c0.32,0,0.65,0.03,0.97,0.08l1.65-1.65C13.78,2.16,12.9,2,12,2c-4.2,0-8,3.22-8,8.2c0,3.32,2.67,7.25,8,11.8 c5.33-4.55,8-8.48,8-11.8c0-1.01-0.16-1.94-0.45-2.8L17.9,9.05z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
