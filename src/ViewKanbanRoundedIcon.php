<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['grid', 'kanban', 'layout', 'pattern', 'squares', 'view'],
)]
final class ViewKanbanRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M8,17L8,17c-0.55,0-1-0.45-1-1V8 c0-0.55,0.45-1,1-1h0c0.55,0,1,0.45,1,1v8C9,16.55,8.55,17,8,17z M12,12L12,12c-0.55,0-1-0.45-1-1V8c0-0.55,0.45-1,1-1h0 c0.55,0,1,0.45,1,1v3C13,11.55,12.55,12,12,12z M16,15L16,15c-0.55,0-1-0.45-1-1V8c0-0.55,0.45-1,1-1h0c0.55,0,1,0.45,1,1v6 C17,14.55,16.55,15,16,15z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
