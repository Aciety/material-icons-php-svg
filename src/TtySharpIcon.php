<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['places'],
    tags: ['call', 'cell', 'contact', 'deaf', 'device', 'hardware', 'impaired', 'mobile', 'phone', 'speech', 'talk', 'telephone', 'text', 'tty'],
)]
final class TtySharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: '0', y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M20,15v6c-3.28,0-6.35-0.89-9-2.43C8.27,16.99,6.01,14.73,4.43,12C2.89,9.35,2,6.28,2,3h6l1,5l-2.9,2.9 c1.43,2.5,3.5,4.57,6,6L15,14L20,15z M14,6h2V4h-2V6z M13,9h2V7h-2V9z M11,6h2V4h-2V6z M18,7h-2v2h2V7z M19,4h-2v2h2V4z M21,7h-2v2 h2V7z M22,4h-2v2h2V4z M14,12h2v-2h-2V12z M11,12h2v-2h-2V12z M19,10h-2v2h2V10z M22,10h-2v2h2V10z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
