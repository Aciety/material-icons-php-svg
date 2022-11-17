<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['cell', 'cellular', 'data', 'internet', 'mobile', 'network', 'no', 'nodata', 'offline', 'phone', 'quit', 'signal', 'wifi', 'wireless', 'x'],
)]
final class SignalCellularNodataRoundedIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M22,13h-7c-1.1,0-2,0.9-2,2v7H4.41c-0.89,0-1.34-1.08-0.71-1.71L20.29,3.71C20.92,3.08,22,3.52,22,4.41V13z M20.3,14.71 L20.3,14.71c-0.39-0.39-1.02-0.39-1.41,0l-1.39,1.39l-1.39-1.39c-0.39-0.39-1.02-0.39-1.41,0l0,0c-0.39,0.39-0.39,1.02,0,1.41 l1.39,1.39l-1.39,1.39c-0.39,0.39-0.39,1.02,0,1.41l0,0c0.39,0.39,1.02,0.39,1.41,0l1.39-1.38l1.39,1.38 c0.39,0.39,1.02,0.39,1.41,0l0,0c0.39-0.39,0.39-1.02,0-1.41l-1.38-1.39l1.38-1.39C20.69,15.73,20.69,15.1,20.3,14.71z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
