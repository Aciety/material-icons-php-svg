<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class TextIncreaseTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M1.99,19h2.42l1.27-3.58h5.65L12.59,19h2.42L9.75,5h-2.5L1.99,19z M6.41,13.39L8.44,7.6h0.12l2.03,5.79H6.41z M20,11h3v2h-3 v3h-2v-3h-3v-2h3V8h2V11z');
        $doc->addChild($l0I1);
    }
}
