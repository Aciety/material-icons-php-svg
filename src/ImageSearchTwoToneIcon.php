<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class ImageSearchTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M17.7 11.53c-.7.31-1.45.47-2.21.47C12.46 12 10 9.53 10 6.5c0-.17.01-.34.03-.5H4v14h14v-8.17l-.3-.3zM5.5 18l2.75-3.53 1.96 2.36 2.75-3.54L16.5 18h-11z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M10.21 16.83l-1.96-2.36L5.5 18h11l-3.54-4.71zM20 6.5C20 4.01 17.99 2 15.5 2S11 4.01 11 6.5s2.01 4.5 4.49 4.5c.88 0 1.7-.26 2.39-.7L21 13.42 22.42 12 19.3 8.89c.44-.7.7-1.51.7-2.39zM15.5 9C14.12 9 13 7.88 13 6.5S14.12 4 15.5 4 18 5.12 18 6.5 16.88 9 15.5 9zM18 20H4V6h6.03c.06-.72.27-1.39.58-2H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-6.17l-2-2V20z');
        $doc->addChild($l0I2);
    }
}
