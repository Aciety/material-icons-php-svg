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
final class ForwardToInboxSharpIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M22,4H2v16h11v-2H4V8l8,5l8-5v5h2V4z M12,11L4,6h16L12,11z M19,15l4,4l-4,4v-3h-4v-2h4V15z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
