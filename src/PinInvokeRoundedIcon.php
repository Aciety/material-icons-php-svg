<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['action'],
    tags: ['action', 'arrow', 'dot', 'invoke', 'pin'],
)]
final class PinInvokeRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M22,12v6c0,1.1-0.9,2-2,2H4c-1.1,0-2-0.9-2-2V6c0-1.1,0.9-2,2-2h10l0,2H4v12h16v-6H22z M22,7c0-1.66-1.34-3-3-3 c-1.66,0-3,1.34-3,3s1.34,3,3,3C20.66,10,22,8.66,22,7z M9.34,15.66c0.39,0.39,1.02,0.39,1.41,0l2.12-2.12l1.27,1.27 C14.46,15.12,15,14.9,15,14.45V10.5c0-0.28-0.22-0.5-0.5-0.5h-3.95c-0.45,0-0.67,0.54-0.35,0.85l1.27,1.27l-2.12,2.12 C8.95,14.63,8.95,15.27,9.34,15.66z');
        $doc->addChild($l0I1);
    }
}
