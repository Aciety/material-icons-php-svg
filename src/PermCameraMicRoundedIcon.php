<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class PermCameraMicRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20 5h-3.17l-1.24-1.35c-.37-.41-.91-.65-1.47-.65H9.88c-.56 0-1.1.24-1.48.65L7.17 5H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h7v-2.09c-2.45-.42-4.41-2.32-4.89-4.75-.12-.61.38-1.16.99-1.16.49 0 .88.35.98.83C8.47 15.64 10.07 17 12 17s3.53-1.36 3.91-3.17c.1-.48.5-.83.98-.83.61 0 1.11.55.99 1.16-.48 2.43-2.44 4.34-4.89 4.75V21h7c1.1 0 2-.9 2-2V7C22 5.9 21.1 5 20 5zm-6 8c0 1.1-.9 2-2 2s-2-.9-2-2V9c0-1.1.9-2 2-2s2 .9 2 2v4z');
        $doc->addChild($l0I1);
    }
}