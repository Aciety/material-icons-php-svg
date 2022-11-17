<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['email', 'envelop', 'letter', 'lock', 'locked', 'mail', 'message', 'password', 'privacy', 'private', 'protection', 'safety', 'secure', 'security', 'send'],
)]
final class MailLockOutlinedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M4,8l8,5l8-5v2h2V6c0-1.1-0.9-2-2-2H4C2.9,4,2.01,4.9,2.01,6L2,18c0,1.1,0.9,2,2,2h12v-2H4V8z M20,6l-8,5L4,6H20z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M23,15v-1c0-1.1-0.9-2-2-2s-2,0.9-2,2v1c-0.55,0-1,0.45-1,1v3c0,0.55,0.45,1,1,1h4c0.55,0,1-0.45,1-1v-3 C24,15.45,23.55,15,23,15z M20,15v-1c0-0.55,0.45-1,1-1s1,0.45,1,1v1H20z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
