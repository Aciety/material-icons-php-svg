<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class PrivacyTipRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M4.19,4.47C3.47,4.79,3,5.51,3,6.3V11c0,5.55,3.84,10.74,9,12c5.16-1.26,9-6.45,9-12V6.3c0-0.79-0.47-1.51-1.19-1.83 l-7-3.11c-0.52-0.23-1.11-0.23-1.62,0L4.19,4.47z M12,7L12,7c0.55,0,1,0.45,1,1v0c0,0.55-0.45,1-1,1h0c-0.55,0-1-0.45-1-1v0 C11,7.45,11.45,7,12,7z M12,11L12,11c0.55,0,1,0.45,1,1v4c0,0.55-0.45,1-1,1h0c-0.55,0-1-0.45-1-1v-4C11,11.45,11.45,11,12,11z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
