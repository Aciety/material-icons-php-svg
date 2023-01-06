<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['approve', 'check', 'complete', 'disabled', 'done', 'enabled', 'finished', 'mark', 'multiple', 'off', 'ok', 'on', 'remove', 'select', 'slash', 'tick', 'yes'],
)]
final class RemoveDoneRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M4.14,2.69L4.14,2.69c-0.39,0.39-0.39,1.02,0,1.41l9.67,9.67l-1.41,1.41l-3.54-3.53c-0.39-0.39-1.02-0.39-1.41,0l0,0 c-0.39,0.39-0.39,1.02,0,1.41l4.24,4.24c0.39,0.39,1.02,0.39,1.41,0l2.12-2.12l5.89,5.89c0.39,0.39,1.02,0.39,1.41,0l0,0 c0.39-0.39,0.39-1.02,0-1.41L5.55,2.69C5.16,2.3,4.53,2.3,4.14,2.69z M18.05,12.36l4.24-4.24c0.39-0.39,0.39-1.03-0.01-1.42l0,0 c-0.39-0.38-1.02-0.38-1.41,0.01l-4.24,4.24L18.05,12.36z M16.64,6.7L16.64,6.7c-0.39-0.39-1.02-0.39-1.41,0l-1.42,1.42l1.41,1.41 l1.42-1.42C17.03,7.72,17.03,7.09,16.64,6.7z M1.79,13.06l4.95,4.95l1.41-1.41L3.2,11.65c-0.39-0.39-1.02-0.39-1.41,0l0,0 C1.4,12.04,1.4,12.67,1.79,13.06z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
