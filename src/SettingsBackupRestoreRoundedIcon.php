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
    tags: ['arrow', 'back', 'backup', 'backwards', 'refresh', 'restore', 'reverse', 'rotate', 'settings'],
)]
final class SettingsBackupRestoreRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M11.77,3c-2.65,0.07-5,1.28-6.6,3.16L3.85,4.85C3.54,4.54,3,4.76,3,5.21V9.5C3,9.78,3.22,10,3.5,10h4.29 c0.45,0,0.67-0.54,0.35-0.85L6.59,7.59C7.88,6.02,9.82,5,12,5c4.32,0,7.74,3.94,6.86,8.41c-0.54,2.77-2.81,4.98-5.58,5.47 c-3.8,0.68-7.18-1.74-8.05-5.16C5.11,13.3,4.71,13,4.27,13h0c-0.65,0-1.14,0.61-0.98,1.23C4.28,18.12,7.8,21,12,21 c5.06,0,9.14-4.17,9-9.26C20.86,6.86,16.65,2.88,11.77,3z M14,12c0-1.1-0.9-2-2-2s-2,0.9-2,2s0.9,2,2,2S14,13.1,14,12z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
