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
    tags: ['design', 'format', 'grid', 'layout', 'quilt', 'square', 'squares', 'stacked', 'view', 'website'],
)]
final class ViewQuiltRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M21,6v4.5c0,0.55-0.45,1-1,1h-9.67c-0.55,0-1-0.45-1-1V6c0-0.55,0.45-1,1-1H20C20.55,5,21,5.45,21,6z M14.67,18v-4.5 c0-0.55-0.45-1-1-1h-3.33c-0.55,0-1,0.45-1,1V18c0,0.55,0.45,1,1,1h3.33C14.22,19,14.67,18.55,14.67,18z M15.67,13.5V18 c0,0.55,0.45,1,1,1H20c0.55,0,1-0.45,1-1v-4.5c0-0.55-0.45-1-1-1h-3.33C16.11,12.5,15.67,12.95,15.67,13.5z M8.33,18V6 c0-0.55-0.45-1-1-1H4C3.45,5,3,5.45,3,6v12c0,0.55,0.45,1,1,1h3.33C7.89,19,8.33,18.55,8.33,18z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
