<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['places'],
    tags: ['baby', 'care', 'carriage', 'child', 'children', 'disabled', 'enabled', 'infant', 'kid', 'newborn', 'no', 'off', 'on', 'parents', 'slash', 'stroller', 'toddler', 'young'],
)]
final class NoStrollerTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M8.1,5.27C8.71,5.1,9.35,5,10,5c0.29,0,0.58,0.02,0.86,0.05L9.49,6.67L8.1,5.27z M15,12.17V8.66l-1.61,1.89 L15,12.17z M12.17,15l-1.39-1.39L9.6,15H12.17z');
        $l1I1->setStyle('opacity', '.3');
        $l0I0->addChild($l1I1);
        $l1I2 = new SVGPath(d: 'M8,20c0,1.1-0.9,2-2,2s-2-0.9-2-2s0.9-2,2-2S8,18.9,8,20z M15,8.66v3.51l2,2v-7.9C17.58,5.59,17.97,5,18.65,5 C19.42,5,20,5.66,20,6.48V7h2V6.48C22,4.56,20.52,3,18.65,3c-1.66,0-2.54,1.27-3.18,2.03l-3.5,4.11l1.42,1.42L15,8.66z M19.78,22.61l-1.91-1.91C17.58,21.46,16.86,22,16,22c-1.1,0-2-0.9-2-2c0-0.86,0.54-1.58,1.3-1.87L14.17,17H7.43 c-0.85,0-1.31-1-0.76-1.65l2.69-3.16L1.39,4.22l1.41-1.41l7.86,7.86l1.42,1.42l0,0l9.11,9.11L19.78,22.61z M12.17,15l-1.39-1.39 L9.6,15H12.17z M10,5c0.29,0,0.58,0.02,0.86,0.05L9.49,6.67l1.42,1.42L14.3,4.1C13.03,3.4,11.56,3,10,3C8.77,3,7.6,3.25,6.53,3.7 L8.1,5.27C8.71,5.1,9.35,5,10,5z');
        $l0I0->addChild($l1I2);
        $doc->addChild($l0I0);
    }
}
