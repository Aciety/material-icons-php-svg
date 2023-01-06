<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['application', 'arrow', 'back', 'backwards', 'change', 'clock', 'date', 'details', 'gear', 'history', 'options', 'refresh', 'renew', 'reverse', 'rotate', 'schedule', 'settings', 'time', 'turn'],
)]
final class ManageHistoryRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M22.75,19c0-0.22-0.03-0.42-0.06-0.63l0.84-0.73c0.18-0.16,0.22-0.42,0.1-0.63l-0.59-1.02c-0.12-0.21-0.37-0.3-0.59-0.22 l-1.06,0.36c-0.32-0.27-0.68-0.48-1.08-0.63l-0.22-1.09c-0.05-0.23-0.25-0.4-0.49-0.4h-1.18c-0.24,0-0.44,0.17-0.49,0.4l-0.22,1.09 c-0.4,0.15-0.76,0.36-1.08,0.63l-1.06-0.36c-0.23-0.08-0.47,0.02-0.59,0.22l-0.59,1.02c-0.12,0.21-0.08,0.47,0.1,0.63l0.84,0.73 c-0.03,0.21-0.06,0.41-0.06,0.63s0.03,0.42,0.06,0.63l-0.84,0.73c-0.18,0.16-0.22,0.42-0.1,0.63l0.59,1.02 c0.12,0.21,0.37,0.3,0.59,0.22l1.06-0.36c0.32,0.27,0.68,0.48,1.08,0.63l0.22,1.09c0.05,0.23,0.25,0.4,0.49,0.4h1.18 c0.24,0,0.44-0.17,0.49-0.4l0.22-1.09c0.4-0.15,0.76-0.36,1.08-0.63l1.06,0.36c0.23,0.08,0.47-0.02,0.59-0.22l0.59-1.02 c0.12-0.21,0.08-0.47-0.1-0.63l-0.84-0.73C22.72,19.42,22.75,19.22,22.75,19z M19,21c-1.1,0-2-0.9-2-2s0.9-2,2-2s2,0.9,2,2 S20.1,21,19,21z M12,7c-0.55,0-1,0.45-1,1v4c0,0.27,0.11,0.52,0.29,0.71l2.07,2.07l1.04-1.79L13,11.59V8C13,7.45,12.55,7,12,7z M4.26,13c-0.65,0-1.14,0.61-0.98,1.24C4.28,18.13,7.8,21,12,21c0.02,0,0.05,0,0.07,0l-1.21-2.09c-2.75-0.45-4.96-2.51-5.64-5.18 C5.11,13.29,4.71,13,4.26,13z M4,10c-0.55,0-1-0.45-1-1V5c0-0.55,0.45-1,1-1s1,0.45,1,1v1.36C6.65,4.32,9.17,3,12,3 c4.97,0,9,4.03,9,9h-2c0-3.86-3.14-7-7-7C9.63,5,7.53,6.19,6.26,8H8c0.55,0,1,0.45,1,1s-0.45,1-1,1H4z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
