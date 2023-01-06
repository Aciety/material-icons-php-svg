<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['bluetooth', 'connection', 'connectivity', 'device', 'remote', 'settings', 'signal', 'wifi', 'wireless'],
)]
final class SettingsRemoteRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M15,9H9c-0.55,0-1,0.45-1,1v12c0,0.55,0.45,1,1,1h6c0.55,0,1-0.45,1-1V10C16,9.45,15.55,9,15,9z M12,14.25 c-0.69,0-1.25-0.56-1.25-1.25s0.56-1.25,1.25-1.25s1.25,0.56,1.25,1.25S12.69,14.25,12,14.25z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M7.82,6.82L7.82,6.82c0.35,0.35,0.9,0.38,1.3,0.1C9.93,6.34,10.93,6,12,6c1.07,0,2.07,0.34,2.88,0.91 c0.4,0.28,0.95,0.26,1.3-0.09l0,0c0.43-0.43,0.39-1.15-0.09-1.5C14.94,4.49,13.53,4,12,4c-1.53,0-2.94,0.49-4.09,1.32 C7.42,5.67,7.39,6.39,7.82,6.82z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M12,0C9.36,0,6.94,0.93,5.05,2.47c-0.46,0.38-0.5,1.07-0.08,1.49l0,0c0.36,0.36,0.93,0.39,1.32,0.07 C7.84,2.77,9.83,2,12,2c2.17,0,4.16,0.77,5.7,2.04c0.39,0.32,0.96,0.29,1.32-0.07l0,0c0.42-0.42,0.38-1.11-0.08-1.49 C17.06,0.93,14.64,0,12,0z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
