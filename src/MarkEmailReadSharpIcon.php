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
    tags: ['approve', 'check', 'complete', 'done', 'email', 'envelop', 'letter', 'mail', 'mark', 'message', 'note', 'ok', 'read', 'select', 'send', 'sent', 'tick', 'yes'],
)]
final class MarkEmailReadSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: '0', y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M12,19c0-3.87,3.13-7,7-7c1.08,0,2.09,0.25,3,0.68V4H2v16h10.08C12.03,19.67,12,19.34,12,19z M4,6l8,5l8-5v2l-8,5L4,8V6z M17.34,22l-3.54-3.54l1.41-1.41l2.12,2.12l4.24-4.24L23,16.34L17.34,22z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
