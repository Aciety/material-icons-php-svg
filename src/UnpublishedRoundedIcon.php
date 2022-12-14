<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['action'],
    tags: ['approve', 'check', 'circle', 'complete', 'disabled', 'done', 'enabled', 'mark', 'off', 'ok', 'on', 'select', 'slash', 'tick', 'unpublished', 'validate', 'verified', 'yes'],
)]
final class UnpublishedRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20.49,20.49L3.51,3.51c-0.39-0.39-1.02-0.39-1.41,0l0,0c-0.39,0.39-0.39,1.02,0,1.41l1.56,1.56 c-1.25,1.88-1.88,4.21-1.59,6.7c0.53,4.54,4.21,8.22,8.74,8.74c2.49,0.29,4.81-0.34,6.7-1.59l1.56,1.56c0.39,0.39,1.02,0.39,1.41,0 l0,0C20.88,21.51,20.88,20.88,20.49,20.49z M9.88,15.89l-2.83-2.83c-0.39-0.39-0.39-1.02,0-1.41l0,0c0.39-0.39,1.02-0.39,1.41,0 l2.12,2.12l0.18-0.18l1.41,1.41l-0.88,0.88C10.9,16.28,10.27,16.28,9.88,15.89z M13.59,10.76l-7.1-7.1c1.88-1.25,4.21-1.88,6.7-1.59 c4.54,0.53,8.22,4.21,8.74,8.74c0.29,2.49-0.34,4.82-1.59,6.7l-5.34-5.34l1.94-1.94c0.39-0.39,0.39-1.02,0-1.41v0 c-0.39-0.39-1.02-0.39-1.41,0L13.59,10.76z');
        $doc->addChild($l0I1);
    }
}
