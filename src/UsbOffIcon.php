<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['device'],
    tags: ['cable', 'connection', 'device', 'off', 'usb', 'wire'],
)]
final class UsbOffIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M15,8h4v4h-1v2c0,0.34-0.08,0.66-0.23,0.94L16,13.17V12h-1V8z M11,8.17l2,2V6h2l-3-4L9,6h2V8.17z M13,16v2.28 c0.6,0.34,1,0.98,1,1.72c0,1.1-0.9,2-2,2s-2-0.9-2-2c0-0.74,0.4-1.37,1-1.72V16H8c-1.11,0-2-0.89-2-2v-2.28C5.4,11.38,5,10.74,5,10 c0-0.59,0.26-1.13,0.68-1.49L1.39,4.22l1.41-1.41l18.38,18.38l-1.41,1.41L13.17,16H13z M11,14v-0.17l-2.51-2.51 c-0.14,0.16-0.31,0.29-0.49,0.4V14H11z');
        $doc->addChild($l0I1);
    }
}
