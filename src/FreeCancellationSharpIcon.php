<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['action'],
    tags: ['approve', 'calendar', 'cancel', 'cancellation', 'check', 'complete', 'date', 'day', 'done', 'event', 'exit', 'free', 'mark', 'month', 'no', 'ok', 'remove', 'schedule', 'select', 'stop', 'tick', 'validate', 'verified', 'x', 'yes'],
)]
final class FreeCancellationSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M11.21,20H5V10h14v4.38l2-2V4h-3V2h-2v2H8V2H6v2H3v18h10.21L11.21,20z M16.54,22.5L13,18.96l1.41-1.41l2.12,2.12l4.24-4.24 l1.41,1.41L16.54,22.5z M10.41,14L12,15.59L10.59,17L9,15.41L7.41,17L6,15.59L7.59,14L6,12.41L7.41,11L9,12.59L10.59,11L12,12.41 L10.41,14z');
        $doc->addChild($l0I1);
    }
}
