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
    tags: ['app', 'command', 'fingers', 'gesture', 'hand', 'press', 'tap', 'touch'],
)]
final class TouchAppRoundedIcon extends SVG
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
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M8.79,9.24V5.5c0-1.38,1.12-2.5,2.5-2.5s2.5,1.12,2.5,2.5v3.74c1.21-0.81,2-2.18,2-3.74c0-2.49-2.01-4.5-4.5-4.5 s-4.5,2.01-4.5,4.5C6.79,7.06,7.58,8.43,8.79,9.24z M14.29,11.71c-0.28-0.14-0.58-0.21-0.89-0.21h-0.61v-6 c0-0.83-0.67-1.5-1.5-1.5s-1.5,0.67-1.5,1.5v10.74l-3.44-0.72c-0.37-0.08-0.76,0.04-1.03,0.31c-0.43,0.44-0.43,1.14,0,1.58 l4.01,4.01C9.71,21.79,10.22,22,10.75,22h6.1c1,0,1.84-0.73,1.98-1.72l0.63-4.47c0.12-0.85-0.32-1.69-1.09-2.07L14.29,11.71z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
