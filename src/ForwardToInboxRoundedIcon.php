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
    tags: ['arrow', 'email', 'envelop', 'forward', 'inbox', 'letter', 'mail', 'message', 'send', 'to'],
)]
final class ForwardToInboxRoundedIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M20,4H4C2.9,4,2,4.9,2,6v12c0,1.1,0.9,2,2,2h9v-2H4V8l6.94,4.34c0.65,0.41,1.47,0.41,2.12,0L20,8v5h2V6C22,4.9,21.1,4,20,4 z M12,11L4,6h16L12,11z M19,16.21c0-0.45,0.54-0.67,0.85-0.35l2.79,2.79c0.2,0.2,0.2,0.51,0,0.71l-2.79,2.79 C19.54,22.46,19,22.24,19,21.79V20h-3c-0.55,0-1-0.45-1-1v0c0-0.55,0.45-1,1-1h3V16.21z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
