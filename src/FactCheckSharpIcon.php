<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['approve', 'check', 'complete', 'done', 'fact', 'list', 'mark', 'ok', 'select', 'tick', 'validate', 'verified', 'yes'],
)]
final class FactCheckSharpIcon extends SvgIcon
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M2,3v18h20V3H2z M10,17H5v-2h5V17z M10,13H5v-2h5V13z M10,9H5V7h5V9z M14.82,15 L12,12.16l1.41-1.41l1.41,1.42L17.99,9l1.42,1.42L14.82,15z');
        $l2I0->setStyle('fill-rule', 'evenodd');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
